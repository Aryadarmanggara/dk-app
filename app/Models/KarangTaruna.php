<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KarangTaruna extends Model
{
    use HasFactory;
    protected $table = 'linmas';
    protected $fillable = [
        'nama',
        'jabatan',
        'nohp',
        'email',
        'alamat',
        'image',
    ];
}
