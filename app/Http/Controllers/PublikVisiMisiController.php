<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;

class PublikVisiMisiController extends Controller
{
    public function index()
    {
        $visimisi = VisiMisi::first();
        return view('publik.visimisi', compact('visimisi'));
    }
}
