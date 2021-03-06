<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request) {
        if(Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            $token = $user->createToken('admin')->accessToken;

            return [
                'token' => $token,
            ];
        }

        return response([
            'error' => 'Invalid Credentials!'
        ], Response::HTTP_UNAUTHORIZED);
    }

    public function register(RegisterRequest $request) {
        $user = User::create($request->only('first_name', 'last_name', 'email') + 
            [
                'password' => Hash::make('1234'),
                'role_id' => 2
            ]
        );

        return response($user, 201);
    }
}
