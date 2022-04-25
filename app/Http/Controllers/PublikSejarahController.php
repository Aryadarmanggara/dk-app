<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use Illuminate\Http\Request;

class PublikSejarahController extends Controller
{
    public function index()
    {
        $sejarah = Sejarah::first();
        return view('publik.sejarah_desa', compact('sejarah'));
    }
}
