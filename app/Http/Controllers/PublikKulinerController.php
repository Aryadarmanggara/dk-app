<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use Illuminate\Http\Request;

class PublikKulinerController extends Controller
{
    public function index()
    {
        $kuliner = Kuliner::latest()->paginate(5);
        return view('publik.kuliner', compact('kuliner'));
    }

    public function show($slug)
    {
        $post = Kuliner::where('slug', $slug)->first();
        return view('show', compact('post'));
    }
}
