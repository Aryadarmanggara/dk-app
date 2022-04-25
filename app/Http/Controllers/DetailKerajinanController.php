<?php

namespace App\Http\Controllers;

use App\Models\Kerajinan;
use Illuminate\Http\Request;

class DetailKerajinanController extends Controller
{
    public function index($slug)
    {
        $kerajinan = Kerajinan::where('slug', $slug)->first();
        return view('publik.detail_kerajinan', compact('kerajinan'));
    }
}
