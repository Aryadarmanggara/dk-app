<?php

namespace App\Http\Controllers;

use App\Models\Alam;
use Illuminate\Http\Request;

class PublikAlamController extends Controller
{
    public function index()
    {
        $alam = Alam::latest()->paginate(5);
        return view('publik.alam', compact('alam'));
    }

    public function show($slug)
    {
        $post = Alam::where('slug', $slug)->first();
        return view('show', compact('post'));
    }
}
