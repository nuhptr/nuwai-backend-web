<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class UserController extends Controller
{
    // TODO: fetch
    public function fetch(Request $request) {
        return ResponseFormatter::success($request->user(), "data profile berhasil diambil");
    }

    // TODO: login
    public function login(Request $request) {
        try {
            $request->validate([
                "email" => "email|required",
                "password" => "required"
            ]);

            $credentials = request(["email", "password"]);
            if (!Auth::attempt($credentials)) {
                return ResponseFormatter::error([
                    "message" => "Unauthorized",
                ], "Authentication failed", 500);
            }

            $user = User::where('email', $request->email)->first();
            if (! Hash::check($request->password, $user->password)) {
                throw new Exception("invalid credentials");
            }

            $tokenResult = $user->createToken("authToken")->plainTextToken;
            return ResponseFormatter::success([
                "access_token" => $tokenResult,
                "token_type" => "Bearer",
                "user" => $user,
            ]);
        } catch (Exception $error) {
            return ResponseFormatter::error([
                "message" => "something when wrong",
                "error" => $error,
            ], "Authentication failed", 500);
        }
    }

    // TODO: register
    public function register(Request $request) {
        try {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', new Password],
            ]);

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $user = User::where('email', $request->email)->first();

            $tokenResult = $user->createToken('authToken')->plainTextToken;

            return ResponseFormatter::success([
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'user' => $user,
            ], 'User registered');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something when wrong',
                'error' => $error,
            ], "Authentication failed", 500);
        }
    }

    // TODO: logout
    public function logout(Request $request) {
        $token = $request->user()->currentAccessToken()->delete();

        return ResponseFormatter::success($token, 'Token revoked');
    }

    // TODO: update profile
    public function updateProfile(Request $request) {
        $data = $request->all();

        $user = Auth::user();
        // TODO: cuma error intelphensenya aja
        $user->update($data);
    }
}
