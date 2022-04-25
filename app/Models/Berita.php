<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon as SupportCarbon;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'beritas';
    protected $fillable = [
        'id_kategori',
        'sampul',
        'judul',
        'konten',
        'slug'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    // public function getCreatedAtAttribute()
    // {
    //     return Carbon::parse($this->attribute['created_at'])
    //         ->translatedFormat('1, d F Y');
    // }
}
