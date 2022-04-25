<?php

namespace App\Http\Controllers;

use App\Models\Pariwisata;
use Illuminate\Http\Request;

class PublikPariwisataController extends Controller
{
    public function index()
    {
        $pariwisata = Pariwisata::latest()->paginate(5);
        return view('publik.pariwisata', compact('pariwisata'));
    }

    public function show($slug)
    {
        $post = Pariwisata::where('slug', $slug)->first();
        return view('show', compact('post'));
    }
}
