<?php

namespace App\Http\Controllers\WEB;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Requests\PekerjaanRequest;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class PekerjaanController extends Controller
{
    public function index()
    {
        // TODO: first time open the web
        if (request()->ajax()) {
            $query = Pekerjaan::query();

            return DataTables::of($query)->addColumn('action', function ($item) {
                return '
                <a class="inline-block border border-gray-700 bg-gray-700 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline" 
                    href="' . route('dashboard.pekerjaan.edit', $item->id) . '">
                        Edit
                </a>
                <form class="inline-block" action="' . route('dashboard.pekerjaan.destroy', $item->id) . '" method="POST">
                    <button class="border border-red-500 bg-red-500 text-white rounded-md px-2 py-1 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline" >
                        Hapus
                    </button>
                    ' . method_field('delete') . csrf_field() . '
                </form>
                ';
            })->editColumn('gaji', function ($item) {
                return number_format($item->gaji);
            })
            ->rawColumns(['action'])
            ->make();
        }

        return view('layouts.dashboard.pekerjaan.index');
    }

    public function create()
    {
        // TODO: show page create new job
        $pekerjaan = Pekerjaan::all();
        return view('layouts.dashboard.pekerjaan.create', compact($pekerjaan));
    }

    public function store(PekerjaanRequest $request)
    {
        // TODO: save request data to database
        $data = $request->all();

        $model = Pekerjaan::create($data);

        if ($request->hasFile('logo_perusahaan_path') && $request->hasFile('foto_lowongan')) {
            $logo_path = $request->file('logo_perusahaan_path')->store('assets/logo', 'public');
            $lowongan_path = $request->file('foto_lowongan')->store('assets/lowongan', 'public');

            $model->update([
                'logo_perusahaan_path' => $logo_path,
                'foto_lowongan' => $lowongan_path
            ]);
        }
        
        return redirect()->route('dashboard.pekerjaan.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(Pekerjaan $pekerjaan)
    {
        // TODO: show edit page
        return view('layouts.dashboard.pekerjaan.edit', [
            'item' => $pekerjaan
        ]);
    }

    public function update(PekerjaanRequest $request, Pekerjaan $pekerjaan)
    {
        // TODO: update data to db
        $data = $request->all();

         if ($request->hasFile('logo_perusahaan_path') && $request->hasFile('foto_lowongan')) {
            $file_logo = $request->file('logo_perusahaan_path')->store('assets/logo', 'public');
            $file_lowongan = $request->file('foto_lowongan')->store('assets/lowongan', 'public');

            $job = new Pekerjaan();
            $job->logo_perusahaan_path = $file_logo;
            $job->foto_lowongan = $file_lowongan;
            $job->save();

            return ResponseFormatter::success([$data], 'success update');
        }

        $pekerjaan->update($data);

        return redirect()->route('dashboard.pekerjaan.index');
    }

    public function destroy(Pekerjaan $pekerjaan)
    {
        // TODO: menghapus pekerjaan
        $pekerjaan->delete();

        return redirect()->route('dashboard.pekerjaan.index');
    }
}
