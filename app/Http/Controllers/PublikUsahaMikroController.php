<?php

namespace App\Http\Controllers;

use App\Models\UsahaMikro;
use Illuminate\Http\Request;

class PublikUsahaMikroController extends Controller
{
    public function index()
    {
        $usahamikro = UsahaMikro::latest()->paginate(5);
        return view('publik.usahamikro', compact('usahamikro'));
    }

    public function show($slug)
    {
        $post = UsahaMikro::where('slug', $slug)->first();
        return view('show', compact('post'));
    }
}
