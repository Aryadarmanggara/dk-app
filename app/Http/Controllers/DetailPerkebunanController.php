<?php

namespace App\Http\Controllers;

use App\Models\Perkebunan;
use Illuminate\Http\Request;

class DetailPerkebunanController extends Controller
{
    public function index($slug)
    {
        $perkebunan = Perkebunan::where('slug', $slug)->first();
        return view('publik.detail_perkebunan', compact('perkebunan'));
    }
}
