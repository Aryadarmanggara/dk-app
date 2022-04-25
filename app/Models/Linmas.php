<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Linmas extends Model
{
    use HasFactory;
    protected $table = 'karang_tarunas';
    protected $fillable = [
        'nama',
        'jabatan',
        'nohp',
        'email',
        'alamat',
        'image',
    ];
}
