<?php

namespace App\Http\Controllers;

use App\Models\Kerajinan;
use Illuminate\Http\Request;

class PublikKerajinanController extends Controller
{
    public function index()
    {
        $kerajinan = Kerajinan::latest()->paginate(5);
        return view('publik.kerajinan', compact('kerajinan'));
    }

    public function show($slug)
    {
        $post = Kerajinan::where('slug', $slug)->first();
        return view('show', compact('post'));
    }
}
