<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PekerjaanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // TODO: request yang masuk ke pekerjaan
            'nama_pekerjaan' => 'required|string|max:255',
            'deskripsi' => 'required',
            'logo_perusahaan_path' => 'image',
            'foto_lowongan' => 'image',
            'tenggang_waktu_pekerjaan' => 'required',
            'lokasi_pekerjaan' => 'required|string|max:255',
            'kategori' => 'required|in:Perusahaan,Perorangan',
        ];
    }
}
