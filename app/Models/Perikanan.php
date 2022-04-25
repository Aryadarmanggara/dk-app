<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perikanan extends Model
{
    use HasFactory;
    protected $table = 'perikanans';
    protected $fillable = [
        'sampul',
        'judul',
        'konten',
        'slug'
    ];
}
