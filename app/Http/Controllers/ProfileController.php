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

    public static function logout(Request $request)
    {
        Auth::logout();
        return response()->json([
            'message' => "Logout successful."
        ], 200);
    }
}
