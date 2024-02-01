<?php

namespace App\Http\Controllers\Repository;


use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthRepository
{

    public static function register(array $userData)
    {
        $user = new User();
        $user->avatar = $userData['avatar'];
        $user->first_name = $userData['first_name'];
        $user->last_name = $userData['last_name'];
        $user->email = $userData['email'];
        $user->phone = $userData['phone'];
        $user->password = $userData['password'];
        $user->verified_token = $userData['verified_token'];

        if(!$user->save()){
            throw new Exception('Cannot save user', 422);
        };

        Mail::send('emails.verify-account', ['user' => $user], function ($message) use ($user) {
            $message->to($user->email, $user->first_name)->subject(env('APP_NAME') . 'Verify your account :');
            $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        });

        return $user;
    }
}
