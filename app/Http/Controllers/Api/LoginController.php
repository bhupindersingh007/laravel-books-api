<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(LoginRequest $request)
    {
       
        if (auth()->attempt($request->only('email', 'password'))) {

            auth()->user()->tokens()->delete();
            
            $token = auth()->user()->createToken('auth-token')->plainTextToken;

            return response()->json([
                'message' => 'Login',
                'access_token' => $token,
            ]);

        }


        return response()->json([
            'message' => 'User not found',
            'errors' => 'Invalid credentials'
        ], 422);


    }
}
