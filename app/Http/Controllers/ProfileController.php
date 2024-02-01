<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Repository\AuthRepository;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public static function profile(Request $request)
    {
        $userInfo = Auth::user();
        if ($userInfo == null) {
            return ['status' => 500, 'errors' => ['message' => ['Logged in user not found.']]];
        }
        return response()->json([
            'user' => $userInfo
        ], 200);
    }

    public static function update_profile(Request $request)
    {
        try {
            DB::beginTransaction();
            $input = $request->input();
            $validator = Validator::make($input, [
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required'
            ]);
            if ($validator->fails()) {
                return ['status' => 500, 'error' => $validator->errors()];
            }
            $user_id = Auth::id();
            $user = User::where('id', $user_id)->first();
            if ($user == null) {
                return ['status' => 500, 'error' => ['error' => ['Invalid Request!']]];
            }

            // Email check
            $checkEmail = User::where('id', '!=', $user_id)->where('email', $input['email'])->first();
            if ($checkEmail != null) {
                return ['status' => 500, 'error' => ['email' => ['Email already been taken!']]];
            }

            $user->first_name = $input['first_name'];
            $user->last_name = $input['last_name'];
            $user->email = $input['email'];
            $user->phone = $input['phone'] ?? null;
            $user->save();
            DB::commit();
            return ['status' => 200, 'msg' => 'Profile updated successfully.'];
        } catch (\Exception $e) {
            DB::rollBack();
            return ['status' => 500, 'error' => $e->getMessage()];
        }
    }

    public static function change_password(Request $request)
    {
        try {
            DB::beginTransaction();
            $input = $request->input();
            $validator = Validator::make($input, [
                'current_password' => 'required|min:6',
                'password' => 'required|confirmed',
            ]);
            if ($validator->fails()) {
                return ['status' => 400, 'error' => $validator->errors()];
            }
            $user_id = Auth::id();
            $user = User::where('id', $user_id)->first();
            if ($user == null) {
                return ['status' => 500, 'error' => ['error' => ['Invalid Request!']]];
            }
            if (!(Hash::check($input['current_password'], $user->password))) {
                return ['status' => 400, 'error' => ['current_password' => ['Please enter the correct current password.']]];
            }
            if ((Hash::check($input['password'], $user->password))) {
                return ['status' => 400, 'error' => ['password' => ['Your new password must be different from your previous password.']]];
            }
            $user->password = bcrypt($input['password']);
            $user->save();
            DB::commit();
            return ['status' => 200, 'msg' => 'Password changed successfully.'];
        } catch (\Exception $e) {
            DB::rollBack();
            return ['status' => 500, 'error' => $e->getMessage()];
        }
    }

    public static function logout(Request $request)
    {
        Auth::logout();
        return response()->json([
            'message' => "Logout successful."
        ], 200);
    }
}
