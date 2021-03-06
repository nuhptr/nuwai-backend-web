<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index()
    {
        // TODO: first page show
        if (request()->ajax()) {
            $query = User::query();

            return DataTables::of($query)->addColumn('action', function ($item) {
                return '
                <a class="inline-block border border-gray-700 bg-gray-700 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                    href="' . route('dashboard.user.edit', $item->id) .'">
                        Edit
                </a>
                <form class="inline-block" action="' . route('dashboard.user.destroy', $item->id) . '" method="POST">
                    <button class="border border-red-500 bg-red-500 text-white rounded-md px-2 py-1 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline" >
                        Hapus
                    </button>
                    ' . method_field('delete') . csrf_field() . '
                </form>';
            })->rawColumns(['action'])->make();
        }

        return view('layouts.dashboard.user.index');
    }

    public function create()
    {
        //
    }

    public function store(UserRequest $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit(User $user)
    {
        // TODO: show edit page
        return view('layouts.dashboard.user.edit', [
            'item' => $user
        ]);
    }

    public function update(UserRequest $request, User $user)
    {
        // TODO: update all request data
        $data = $request->all();
        $user->update($data);

        return redirect()->route('dashboard.user.index');
    }

    public function destroy(User $user)
    {
        // TODO: delete user
        $user->delete();

        return redirect()->route('dashboard.user.index');
    }
}
