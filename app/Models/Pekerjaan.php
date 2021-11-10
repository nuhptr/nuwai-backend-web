<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Pekerjaan extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama_pekerjaan',
        'deskripsi',
        'nama_perusahaan',
        'gaji',
        'tentang_pembuka_lowongan',
        'tenggang_waktu_pekerjaan',
        'lokasi_pekerjaan',
        'kategori',
    ];

    protected $appends = [
        'logo_perusahaan_path',
        'foto_lowongan',
    ];

    public function getLogoPerusahaanPathAttribute() {
        return config('app.url') . Storage::url($this->attributes['logo_perusahaan_path']);
    }

    public function getFotoLowonganAttribute() {
        return config('app.url') . Storage::url($this->attributes['foto_lowongan']);
    }

    // TODO: relations
    public function lamaran() {
        return $this->hasMany(Lamaran::class, "id_pekerjaan", "id");
    }
}
