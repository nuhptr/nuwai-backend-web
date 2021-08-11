<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pekerjaan extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama_pekerjaan',
        'deskripsi',
        'nama_perusahaan',
        'gaji',
        'logo_perusahaan_path',
        'tentang_pembuka_lowongan',
        'tanggal_dibuat',
        'tenggang_waktu_pekerjaan',
        'lokasi_pekerjaan',
        'kategori',
    ];

    // TODO: relations
    public function lamaran() {
        return $this->hasMany(Lamaran::class, "id_pekerjaan", "id");
    }
}
