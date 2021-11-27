<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Http\Requests\PekerjaanRequest;
use App\Models\Pekerjaan;
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
        $this->validate($request, [
            'nama_pekerjaan' => 'required|string|max:255',
            'deskripsi' => 'required',
            'logo_perusahaan_path' => 'image|mimes:jpeg,png,bmp,gif,svg',
            'foto_lowongan' => 'required|image|mimes:jpeg,png,bmp,gif,svg',
            'tenggang_waktu_pekerjaan' => 'required',
            'lokasi_pekerjaan' => 'required|string|max:255',
            'kategori' => 'required|in:Perusahaan,Perorangan',
        ]);

        // upload image
        $image_logo = $request->file('logo_perusahaan_path')->store('assets/logo', 'public');
        $image_lowongan = $request->file('foto_lowongan')->store('assets/lowongan', 'public');

        // save to db
        Pekerjaan::create([
            'logo_perusahaan_path'      => $image_logo ?? '',
            'foto_lowongan'             => $image_lowongan,
            'nama_pekerjaan'            => $request->nama_pekerjaan,
            'deskripsi'                 => $request->deskripsi,
            'nama_perusahaan'           => $request->nama_perusahaan,
            'gaji'                      => $request->gaji,
            'tentang_pembuka_lowongan'  => $request->tentang_pembuka_lowongan,
            'tenggang_waktu_pekerjaan'  => $request->tenggang_waktu_pekerjaan,
            'lokasi_pekerjaan'          => $request->lokasi_pekerjaan,
            'kategori'                  => $request->kategori,
        ]);

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
        if (
            $request->file('logo_perusahaan_path') != ''
            || $request->file('foto_lowongan') != ''
        ) {
            // upload image baru
            $image_logo = $request->file('logo_perusahaan_path')->store('assets/logo', 'public');
            $image_lowongan = $request->file('foto_lowongan')->store('assets/lowongan', 'public');

            // update with image
            $pekerjaan = Pekerjaan::findOrFail($pekerjaan->id);
            $pekerjaan->update([
                'logo_perusahaan_path'      => $image_logo,
                'foto_lowongan'             => $image_lowongan,
                'nama_pekerjaan'            => $request->nama_pekerjaan,
                'deskripsi'                 => $request->deskripsi,
                'nama_perusahaan'           => $request->nama_perusahaan,
                'gaji'                      => $request->gaji,
                'tentang_pembuka_lowongan'  => $request->tentang_pembuka_lowongan,
                'tenggang_waktu_pekerjaan'  => $request->tenggang_waktu_pekerjaan,
                'lokasi_pekerjaan'          => $request->lokasi_pekerjaan,
                'kategori'                  => $request->kategori,
            ]);
        } else {
            // update without image
            $pekerjaan = Pekerjaan::findOrFail($pekerjaan->id);
            $pekerjaan->update([
                'nama_pekerjaan'            => $request->nama_pekerjaan,
                'deskripsi'                 => $request->deskripsi,
                'nama_perusahaan'           => $request->nama_perusahaan,
                'gaji'                      => $request->gaji,
                'tentang_pembuka_lowongan'  => $request->tentang_pembuka_lowongan,
                'tenggang_waktu_pekerjaan'  => $request->tenggang_waktu_pekerjaan,
                'lokasi_pekerjaan'          => $request->lokasi_pekerjaan,
                'kategori'                  => $request->kategori,
            ]);
        }

        return redirect()->route('dashboard.pekerjaan.index');
    }

    public function destroy(Pekerjaan $pekerjaan)
    {
        // TODO: menghapus pekerjaan
        $pekerjaan->delete();

        return redirect()->route('dashboard.pekerjaan.index');
    }
}
