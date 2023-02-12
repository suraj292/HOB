<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login (Request $request) {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = User::where('email', $request->email)->first();
            $token = $user->createToken($user->email)->plainTextToken;
            $response = ['token' => $token, 'user' => $user];
            return response($response, 200);
        } else {
            $response = ["message" =>'Unauthorized access'];
            return response($response, 422);
        }
    }
    public function logout (Request $request) {
        $token = $request->user()->currentAccessToken()->delete();
        if ($token) {
            $response = ['message' => 'You have been successfully logged out!'];
            return response($response, 200);
        }
    }
}
