<?php

namespace App\Http\Controllers;

use App\Models\Perikanan;
use Illuminate\Http\Request;

class DetailPerikananController extends Controller
{
    public function index($slug)
    {
        $perikanan = Perikanan::where('slug', $slug)->first();
        return view('publik.detail_perikanan', compact('perikanan'));
    }
}
