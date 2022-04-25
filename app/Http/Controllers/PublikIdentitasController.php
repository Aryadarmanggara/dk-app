<?php

namespace App\Http\Controllers;

use App\Models\Identitas;
use Illuminate\Http\Request;

class PublikIdentitasController extends Controller
{
    public function index()
    {
        $identitas = Identitas::first();
        return view('publik.identitas_desa', compact('identitas'));
    }
}
