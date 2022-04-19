<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Pkk;
use App\Models\Ulasan;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $pkk = Pkk::first();
        $ulasan = Ulasan::first();
        $visimisi = VisiMisi::first();
        $berita = Berita::latest()->paginate(5);
        $galeri = Galeri::latest()->paginate(5);
        return view('index', compact('pkk', 'berita', 'galeri', 'ulasan', 'visimisi'));
    }
}
