<?php

namespace App\Http\Controllers;

use App\Models\Bumdes;
use Illuminate\Http\Request;

class PublikBumdesaController extends Controller
{
    public function index()
    {
        $bumdesa = Bumdes::get();

        return view('publik.bumdesa', compact('bumdesa'));
    }
}
