<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PublikPengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::latest()->paginate(5);
        return view('publik.pengumuman', compact('pengumuman'));
    }

    public function show($slug)
    {
        $post = Pengumuman::where('slug', $slug)->first();
        return view('show', compact('post'));
    }
}
