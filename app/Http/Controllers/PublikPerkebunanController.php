<?php

namespace App\Http\Controllers;

use App\Models\Perkebunan;
use Illuminate\Http\Request;

class PublikPerkebunanController extends Controller
{
    public function index()
    {
        $perkebunan = Perkebunan::latest()->paginate(5);
        return view('publik.perkebunan', compact('perkebunan'));
    }

    public function show($slug)
    {
        $post = Perkebunan::where('slug', $slug)->first();
        return view('show', compact('post'));
    }
}
