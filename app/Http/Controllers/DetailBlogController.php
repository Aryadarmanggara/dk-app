<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Http\Request;

class DetailBlogController extends Controller
{
    public function index($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        $kategori = Kategori::latest()->get();
        $user = User::first();
        return view('publik.detail_blog', compact('berita', 'user', 'kategori'));
    }
}
