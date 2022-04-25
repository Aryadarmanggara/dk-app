<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alam extends Model
{
    use HasFactory;
    protected $table = 'alams';
    protected $fillable = [
        'sampul',
        'judul',
        'konten',
        'slug'
    ];
}
