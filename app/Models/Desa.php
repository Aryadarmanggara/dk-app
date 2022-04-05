<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;
    protected $table = 'desas';
    protected $fillable = [
        'nama_desa',
        'nama_kecamatan',
        'kabupaten',
        'provinsi',
        'kode_pos',
        'alamat',
        'nama_kepala_desa',
        'logo',
        'instagram',
        'facebook',
        'twitter',
    ];
}
