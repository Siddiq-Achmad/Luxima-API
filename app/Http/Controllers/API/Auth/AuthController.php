<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

    /**
     * @OA\Info(
     *     title="LUXIMA API Documentation",
     *     version="1.0.0",
     *     description="This is the API documentation for the Luxima project. It covers all endpoints related to authentication and other functionalities.",
     *     @OA\Contact(
     *         email="admin@luxima.id"
     *     ),
     * )
     * 
     *  * @OA\Server(
     *     url="http://localhost:8000/api",
     *     description="LUXIMA API Server"
     * )
     *
     * @OA\Schema(
     *     schema="User",
     *     type="object",
     *     title="User",
     *     description="User model",
     *     required={"id", "name", "email"},
     *     @OA\Property(
     *         property="id",
     *         type="integer",
     *         format="int64",
     *         example=1
     *     ),
     *     @OA\Property(
     *         property="name",
     *         type="string",
     *         example="John Doe"
     *     ),
     *     @OA\Property(
     *         property="email",
     *         type="string",
     *         format="email",
     *         example="johndoe@luxima.id"
     *     ),
     *     @OA\Property(
     *         property="password",
     *         type="string",
     *         format="password",
     *         example="12345678"
     *     ),
     *     @OA\Property(
     *         property="password_confirmation",
     *         type="string",
     *         format="password",
     *         example="12345678"
     *     ),
     *     @OA\Property(
     *         property="created_at",
     *         type="string",
     *         format="date-time",
     *         example="2024-09-03T12:34:56Z"
     *     ),
     *     @OA\Property(
     *         property="updated_at",
     *         type="string",
     *         format="date-time",
     *         example="2024-09-03T12:34:56Z"
     *     ),
     * )
     */
   
class AuthController extends Controller
{
    //
    //Register API Passport
    /**
     * @OA\Post(
     *     path="/auth/register",
     *     summary="Register a new user",
     *     tags={"Auth"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"name", "email", "password"},
     *             @OA\Property(property="name", type="string", example="John Doe"),
     *             @OA\Property(property="email", type="string", format="email", example="johndoe@luxima.id"),
     *             @OA\Property(property="password", type="string", format="password", example="12345678"),
     *             @OA\Property(property="password_confirmation", type="string", format="password", example="12345678")
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="User registered successfully"
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Bad Request"
     *     )
     * )
     */
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

    //Login API Passport
    /**
     * @OA\Post(
     *     path="/auth/login",
     *     summary="Login user",
     *     tags={"Auth"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"email", "password"},
     *             @OA\Property(property="email", type="string", format="email", example="johndoe@luxima.id"),
     *             @OA\Property(property="password", type="string", format="password", example="12345678")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="User logged in successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="user", type="object", ref="#/components/schemas/User"),
     *             @OA\Property(property="token", type="string", example="eyJ0eXAiOiJKV1Q...")
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Invalid credentials")
     *         )
     *     )
     * )
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        $user = User::where('email', $request->email)->first();

        if(!empty($user))
        {
            if(!Hash::check($request->password, $user->password))
            {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Password is not correct'
                ], 401);
            }
        }
        else
        {
            return response()->json([
                'status' => 'error',
                'message' => 'User not found'
            ], 401);
        }

        $token = $user->createToken('Laravel Password Grant Client')->accessToken;

        return response()->json([
            'status' => 'success',
            'message' => 'User logged in successfully',
            'user' => $user,
            'token' => $token
        ], 200);
    }

    //Logout API Passport
    /**
     * @OA\Post(
     *     path="/auth/logout",
     *     summary="Logout user",
     *     tags={"Auth"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="User logged out successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Successfully logged out")
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Invalid token")
     *         )
     *     )
     * )
     */    
    public function logout(Request $request)
    {
        $token = $request->user()->token();
        $token->revoke();
        $response = [
            'status' => 'success',
            'message' => 'You have been successfully logged out!'];
        return response($response, 200);
    }

    //Profile API Passport
    /**
     * @OA\Get(
     *     path="/profile",
     *     operationId="getProfile",
     *     tags={"Profile"},
     *     summary="Get user profile",
     *     description="Retrieve user profile information.",
     *     security={{"bearerAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             @OA\Property(property="id", type="integer", example=1),
     *             @OA\Property(property="name", type="string", example="John Doe"),
     *             @OA\Property(property="email", type="string", example="johndoe@luxima.id"),
     *             @OA\Property(property="created_at", type="string", format="date-time", example="2024-09-03T12:34:56Z"),
     *             @OA\Property(property="updated_at", type="string", format="date-time", example="2024-09-03T12:34:56Z")
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Unauthenticated.")
     *         )
     *     )
     * )
     */
    public function profile()
    {
        $user = Auth::user();
        return response()->json([
            'status' => 'success',
            'user' => $user], 200);
    }

    //Refresh Token API Passport
    /**
     * @OA\Get(
     *     path="/auth/refresh-token",
     *     summary="Refresh authentication token",
     *     tags={"Auth"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="Token refreshed successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="token", type="string", example="eyJ0eXAiOiJKV1Q...")
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Invalid token")
     *         )
     *     )
     * )
     */
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
