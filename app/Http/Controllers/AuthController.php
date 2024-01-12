<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Repository\AuthRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public static function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'avatar' => 'nullable',
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'phone' => 'nullable|numeric',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            $activation_token = md5(uniqid(uniqid(), true));

            $userData = [
                'avatar' => $request->avatar ?? null,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => bcrypt($request->password),
                'verified_token' => $activation_token,
            ];

            $rv = AuthRepository::register($userData);

            return response()->json([
                'message' => 'Registration has been completed successfully.',
                'user' => $rv
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], $e->getCode());
        }
    }

    public static function VerifyAccount(Request $request, $verify_token)
    {
        $user = \App\Models\User::where('verified_token', $verify_token)->first();
        if($user == null){
            abort(404);
        }
        $user->is_active = 1;
        $user->email_verified_at = Carbon::now();
        $user->save();
        return redirect()->route('login');
    }

    public static function login()
    {
        return view('auth.login');
    }


    public static function resetPassword()
    {
        return view('auth.register');
    }

    public static function updatePassword()
    {
        return view('auth.forgot');
    }

}
