<?php

namespace App\Http\Controllers;

use App\Models\Pkk;
use Illuminate\Http\Request;

class PublikPkkController extends Controller
{
    public function index()
    {
        $pkk = Pkk::get();

        return view('publik.pkk', compact('pkk'));
    }
}
