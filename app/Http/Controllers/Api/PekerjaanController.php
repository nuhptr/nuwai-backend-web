<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    // TODO: all request
    public function all(Request $request) {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $namaPekerjaan =  $request->input('nama_pekerjaan');
        $kategori = $request->input('kategori');
        $deskripsi = $request->input('deksripsi');
        
        $gaji = $request->input('gaji');
        
        if ($id) {
            $job = Pekerjaan::with(['lamaran'])->find($id);
            
            if ($job) {
                return ResponseFormatter::success(
                    $job,
                    "Data jobs berhasil diambil",
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    "Data produk tidak ada",
                    404,
                );
            }
        }

        $job = Pekerjaan::with(['lamaran']);

        if ($namaPekerjaan) {
            $job->where('nama_pekerjaan', 'like', '%' . $namaPekerjaan. '%');
        }

        if ($deskripsi) {
            $job->where('deskripsi', 'like', '%' . $deskripsi . '%');
        }

        if ($kategori) {
            $job->where('kategori', 'like',  $kategori);
        }

        if ($gaji) {
            $job->where('gaji', 'like', '%'. $gaji . '%');
        }

        return ResponseFormatter::success(
            $job->paginate($limit),
            "Data list pekerjaan berhasil diambil",
        );
    }
}
