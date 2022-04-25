<?php

namespace App\Http\Controllers;

use App\Models\Pariwisata;
use Illuminate\Http\Request;

class DetailPariwisataController extends Controller
{
    public function index($slug)
    {
        $pariwisata = Pariwisata::where('slug', $slug)->first();
        return view('publik.detail_pariwisata', compact('pariwisata'));
    }
}
