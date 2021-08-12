<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        } catch (Exception $error) {
            //throw $th;
        }
    }
}
