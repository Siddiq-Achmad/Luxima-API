<?php

namespace App\Http\Controllers\API\Auth;

//use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class AuthController extends BaseController
{

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken('Laravel Password Grant Client')->accessToken;
        return response()->json([
            'status' => 'success',
            'message' => 'User registered successfully',
        ], 200);
    }


    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        $user = Auth::user();
        $token = $user->createToken('API Token')->accessToken;

        return response()->json([
            'status' => 'success',
            'message' => 'User logged in successfully',
            'user' => $user,
            'token' => $token
        ], 200);
    }


    public function logout(Request $request)
    {
        $token = $request->user()->token();
        $token->revoke();
        $response = [
            'status' => 'success',
            'message' => 'You have been successfully logged out!'
        ];
        return response($response, 200);
    }


    public function profile()
    {
        $user = Auth::user();

        if (!$user) {
            return response()->json([
                'status' => 'error',
                'message' => 'User not found'
            ], 404);
        } else {
            return response()->json([
                'status' => 'success',
                'data' => [
                    'user' => $user,
                    'roles' => $user->getRoleNames(),
                    'permissions' => $user->getAllPermissions()->pluck('name'),
                ]
            ], 200);
        }
    }




    public function refreshToken()
    {

        $user = request()->user();
        $token = $user->createToken('Laravel Password Grant Client')->accessToken;
        return response()->json([
            'status' => 'success',
            'token' => $token
        ], 200);
    }
}
