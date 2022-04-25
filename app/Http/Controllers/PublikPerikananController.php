<?php

namespace App\Http\Controllers;

use App\Models\Perikanan;
use Illuminate\Http\Request;

class PublikPerikananController extends Controller
{
    public function index()
    {
        $perikanan = Perikanan::latest()->paginate(5);
        return view('publik.perikanan', compact('perikanan'));
    }

    public function show($slug)
    {
        $post = Perikanan::where('slug', $slug)->first();
        return view('show', compact('post'));
    }
}
