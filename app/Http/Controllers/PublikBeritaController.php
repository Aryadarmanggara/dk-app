<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Http\Request;

class PublikBeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::latest()->paginate(5);
        $beritas = Berita::get();
        $user = User::first();
        $kategori = Kategori::latest()->get();
        return view('publik.berita', compact('berita', 'beritas', 'user', 'kategori'));
    }

    public function show($slug)
    {
        $post = Berita::where('slug', $slug)->first();
        return view('show', compact('post'));
    }
}
