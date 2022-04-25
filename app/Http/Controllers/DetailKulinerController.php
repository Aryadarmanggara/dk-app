<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use Illuminate\Http\Request;

class DetailKulinerController extends Controller
{
    public function index($slug)
    {
        $kuliner = Kuliner::where('slug', $slug)->first();
        return view('publik.detail_kuliner', compact('kuliner'));
    }
}
