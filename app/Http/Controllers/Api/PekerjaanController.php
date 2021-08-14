<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    // TODO: all request
    public function all(Request $request) {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $namaPekerjaan =  $request->input('nama_pekerjaan');
    }
}
