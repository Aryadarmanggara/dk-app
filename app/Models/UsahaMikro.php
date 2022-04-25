<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsahaMikro extends Model
{
    use HasFactory;
    protected $table = 'usaha_mikros';
    protected $fillable = [
        'sampul',
        'judul',
        'konten',
        'slug'
    ];
}
