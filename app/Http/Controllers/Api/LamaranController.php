<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Lamaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LamaranController extends Controller
{
    // TODO: all request
    public function all(Request $request) {
        $id = $request->input("id");
        $limit = $request->input("limit", 6);
        
        if ($id) {
            $lamar = Lamaran::with(["user", "pekerjaan"])->find($id);

            if ($lamar) {
                return ResponseFormatter::success(
                    $lamar,
                    "Data lamaran berhasil diambil"
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    "Data lamaran tidak ditemukan",
                    404,
                );
            }
        }

        $lamaran = Lamaran::query();

        return ResponseFormatter::success(
            $lamaran->paginate($limit),
            'Data list berhasil diambil'
        );
    }

    // TODO: memasukan lamaran
    public function lamaran(Request $request) {
        $createdJob = Lamaran::create([
            'id_users' => Auth::user()->id,
            'id_pekerjaan' => $request->id_pekerjaan,
        ]);

        return ResponseFormatter::success(
            $createdJob,
            'Data berhasil ditambahkan'
        );
    }
}
