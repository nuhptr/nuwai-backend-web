<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lamaran extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_users', 'id_pekerjaan',
    ];

    // TODO: relationships
    public function user()
    {
        return $this->belongsTo(User::class, "id_users", "id");
    }

    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class, "id_pekerjaan", "id");
    }
}
