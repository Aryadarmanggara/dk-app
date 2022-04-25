<?php

namespace App\Http\Controllers;

use App\Models\SeniBudaya;
use Illuminate\Http\Request;

class DetailSeniBudayaController extends Controller
{
    public function index($slug)
    {
        $senibudaya = SeniBudaya::where('slug', $slug)->first();
        return view('publik.detail_senibudaya', compact('senibudaya'));
    }
}
