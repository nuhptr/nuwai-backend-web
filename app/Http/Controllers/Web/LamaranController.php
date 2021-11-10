<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Http\Requests\LamaranRequest;
use App\Http\Requests\UserRequest;
use App\Models\Lamaran;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class LamaranController extends Controller
{
    public function index()
    {
        // TODO: first open page
        if (request()->ajax()) {
            $query = Lamaran::with(['user', 'pekerjaan']);

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="inline-block border border-blue-700 bg-blue-700 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-blue-800 focus:outline-none focus:shadow-outline" 
                            href="' . route('dashboard.lamaran.show', $item->id) . '">
                                Detail
                        </a>
                        <form class="inline-block" action="' . route('dashboard.lamaran.destroy', $item->id) . '" method="POST">
                            <button class="border border-red-500 bg-red-500 text-white rounded-md px-2 py-1 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline" >
                                Hapus
                        </button>
                        ' . method_field('delete') . csrf_field() . '
                </form>';
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('layouts.dashboard.lamaran.index');
    }

    public function create()
    {
        //
    }

    public function store(LamaranRequest $request)
    {
        //
    }

    public function show(Lamaran $lamaran)
    {
        // TODO: show detail page
        if (request()->ajax()) {
            $query = Lamaran::with(['user', 'pekerjaan']);

            return DataTables::of($query)->editColumn(
                'pekerjaan.gaji', function($item) {
                    return number_format($item->pekerjaan->gaji);
                }
            )->make();
        }

        return view('layouts.dashboard.lamaran.show', [
            'lamaran' => $lamaran
        ]);
    }

    public function edit($id)
    {
        //
    }

    public function update(UserRequest $request, User $user)
    {
        //
    }

    public function destroy(Lamaran $lamaran)
    {
        // TODO: Delete lamaran
        $lamaran->delete();

        return redirect()->route('dashboard.lamaran.index');
    }
}
