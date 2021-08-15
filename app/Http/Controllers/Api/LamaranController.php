<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Lamaran;
use Illuminate\Http\Request;

class LamaranController extends Controller
{
    // TODO: all request
    public function all(Request $request) {
        $id = $request->input("id");
        $limit = $request->input("limit", 6);
        
        if ($id) {
            $lamar = Lamaran::with(["user", "pekerjaan"])->find($id);

            if ($lamar) {
                
            }
        }
    }
}
