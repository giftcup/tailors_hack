<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    /**
     *  Create a new AuthController instance
     * 
     *  @return void
     */

    public function __construct()
    {
        return $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

     /**
     * Create a new user and log them in.
     *
     * @return \Illuminate\Http\JsonResponse
     */
     public function register(Request $request)
     {
        $this->validate(
            $request, 
            [
                'name' => ['required', 'string'],
                'phone_number' => ['required', 'string', 'min:9', 'max:9', 'unique:users,tel'],
                'password' => ['required', 'string', 'min:8', 'confirmed']
            ]
        );

        $userCreated = User::create([
            'name' => $request['name'],
            'tel' => $request['phone_number'],
            'password' => $request['password']
        ]);

        if ($userCreated) {
            return $this->login($request);
        } else {
            return response()->json([
                'success' => false,
                'message' => "User registration failed. Try again"
            ], 401);
        }
     }

     /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
     public function login(Request $request)
     {
        $this->validate(
            $request,
            [
                'phone_number' => ['required', 'string', 'min:9', 'max:9'],
                'password' => ['required', 'string']
            ]
        );

        $user = User::where('tel', $request->phone_number)->first();

        if($user) {
            $jwt_token = null;

            $input = ['tel' => request('phone_number'), 'password' => request('password')];

            if (!$jwt_token = auth()->attempt($input)) {
                return response()->json([
                    'success' => false,
                    'error' => "Unauthorized"
                ], 401);
            }

            return response()->json([
                'success' => true,
                'token' => $jwt_token,
                'user' => $this->me()->original,
                'token_type' => 'bearer',
                'expires_in' => auth()->factory()->getTTl() * 60
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => __('tel_password_login.invalid')
            ], 401);
        }
     }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
