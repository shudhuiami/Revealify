<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Repository\AuthRepository;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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

    public static function login(Request $request)
    {
        $input = $request->input();

        // Request Validation
        $validator = Validator::make($input, [
            'username' => 'required|min:3',
            'password' => 'required|min:6'
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 500, 'error' => $validator->errors()],200);
        }

        try {
            $userInfo = User::where('username', $input['username'])->orWhere('email', $input['username'])->first();

            if ($userInfo == null) {
                return ['status' => 500, 'error' => ['username' => 'The user does not exist. Please re-check your credentials.']];
            }

            if (Hash::check($input['password'], $userInfo['password'])) {
                $credential = [
                    'username' => $userInfo->username,
                    'password' => $input['password']
                ];
                $remember = isset($input['remember']) && $input['remember'] == 1;
                if (Auth::attempt($credential, $remember)) {
                    return ['status' => 200, 'msg' => 'Login Successful.'];
                }
            }
            return ['status' => 500, 'error' => ['password' => 'The credentials are invalid! Try again.']];

        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'error' => $e->getMessage()],200);
        }
    }


    public static function resetPassword(Request $request)
    {
        $input = $request->input();
        // Request Validation
        $validator = Validator::make($input, ['username' => 'required']);
        if ($validator->fails()) {
            return response()->json(['status' => 500, 'error' => $validator->errors()],200);
        }
        try {
            // Find User Details
            $user = User::where('username', $input['username'])->orWhere('email', $input['username'])->first();

            if ($user != null) {

                // Generate Reset Code
                $user->reset_code = rand(100000, 999999);
                $user->updated_at = Carbon::now('UTC');
                $user->save();

                Mail::send('emails.reset-password', ['user' => $user], function ($message) use ($user) {
                    $message->to($user->email, $user->name)->subject(env('APP_NAME').': Reset Password Code');
                    $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
                });
                return response()->json(['status' => 200, 'msg' => 'A 6-digit password reset code has been sent to your email.'],200);

            } else {
                return response()->json(['status' => 500, 'error' => ['username' => ['User not found. Provide valid username/email.']]],200);
            }

        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'error' => $e->getMessage()],200);
        }
    }

    public static function updatePassword(Request $request)
    {
        $input = $request->input();
        // Request Validation
        $validator = Validator::make($input, [
            'code' => 'required|integer|min:6',
            'username' => 'required',
            'password' => 'required|min:6|confirmed'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 500, 'error' => $validator->errors()],200);
        }

        try {
            // Find User Details
            $user = User::where('reset_code', $input['code'])
                ->where(function ($q) use($input){
                    $q->where('username', $input['username']);
                    $q->orWhere('email', $input['username']);
                })
                ->first();
            if ($user != null) {
                // Reset Password
                $user->reset_code = null;
                $user->password = bcrypt($input['password']);
                $user->updated_at = Carbon::now('UTC');
                $user->save();
                return response()->json(['status' => 200, 'msg' => 'Password has been updated successfully.'],200);

            } else {
                return response()->json(['status' => 500, 'error' => ['code' => ['Invalid Code provided, Please check you code again!']]],200);
            }

        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'error' => $e->getMessage()],200);
        }
    }

}
