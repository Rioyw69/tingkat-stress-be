<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|exists:users',
            'password' => 'required'
        ]);

        $user = User::where('username', $request->username)->first();
        
        if (Hash::check($request->password, $user->password)) {

            $api_token = Str::random(20);
            
            $user->forceFill([
                'api_token' => $api_token
            ]);

            $user->save();

            return response()->json([
                'type' => 'success',
                'message' => 'Login Success',
                'data' => $user,
                'token' => $api_token
            ], 200);

        } else {
            return response()->json([
                'type' => 'error',
                'message' => 'Password is invalid',
                'errors' => [
                    'password' => [
                        'Your Password is invalid'
                    ]
                ]
            ], 422);
        }
        

    }
}
