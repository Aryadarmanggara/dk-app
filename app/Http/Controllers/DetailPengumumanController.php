<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class DetailPengumumanController extends Controller
{
    public function index($slug)
    {
        $pengumuman = Pengumuman::where('slug', $slug)->first();
        return view('publik.detail_pengumuman', compact('pengumuman'));
    }
}
