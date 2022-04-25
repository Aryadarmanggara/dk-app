<?php

namespace App\Http\Controllers;

use App\Models\UsahaMikro;
use Illuminate\Http\Request;

class DetailUsahaMikroController extends Controller
{
    public function index($slug)
    {
        $usahamikro = UsahaMikro::where('slug', $slug)->first();
        return view('publik.detail_usahamikro', compact('usahamikro'));
    }
}
