<?php

namespace App\Http\Controllers;

use App\Models\SeniBudaya;
use Illuminate\Http\Request;

class PublikSeniBudayaController extends Controller
{
    public function index()
    {
        $senibudaya = SeniBudaya::latest()->paginate(5);
        return view('publik.senibudaya', compact('senibudaya'));
    }

    public function show($slug)
    {
        $post = SeniBudaya::where('slug', $slug)->first();
        return view('show', compact('post'));
    }
}
