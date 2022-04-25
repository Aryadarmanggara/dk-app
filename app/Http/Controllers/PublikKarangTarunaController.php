<?php

namespace App\Http\Controllers;

use App\Models\KarangTaruna;
use Illuminate\Http\Request;

class PublikKarangTarunaController extends Controller
{
    public function index()
    {
        $karang_taruna = KarangTaruna::get();

        return view('publik.karang_taruna', compact('karang_taruna'));
    }
}
