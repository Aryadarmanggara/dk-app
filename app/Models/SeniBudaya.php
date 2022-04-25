<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeniBudaya extends Model
{
    use HasFactory;
    protected $table = 'seni_budayas';
    protected $fillable = [
        'sampul',
        'judul',
        'konten',
        'slug'
    ];
}
