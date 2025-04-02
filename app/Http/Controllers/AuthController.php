<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request): JsonResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            'remember' => 'boolean'
        ]);

        $remember = $credentials['remember'] ?? false;
        unset($credentials['remember']);

        if (!Auth::attempt($credentials, $remember)) {
            return response()->json([
                'message' => 'Email or password is incorrect'
            ], 422);
        }

        $user = Auth::user();
        if (!isset($user->is_admin) || !$user->is_admin) {
            Auth::logout();
            abort(403, 'You don\'t have permission to authenticate as admin');
        }

        $token = $user->createToken('main')->plainTextToken;

        return response()->json([
            'user' => new UserResource($user),
            'token' => $token
        ]);
    }

    public function logout(Request $request)
    {
        $user = $request->user();

        if ($user) {
            $user->currentAccessToken()->delete();
        }

        return response()->noContent();
    }

    public function getUser(Request $request)
    {
        return new UserResource($request->user());
    }
}
