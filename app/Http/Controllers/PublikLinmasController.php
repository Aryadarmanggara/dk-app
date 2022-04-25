<?php

namespace App\Http\Controllers;

use App\Models\Linmas;
use Illuminate\Http\Request;

class PublikLinmasController extends Controller
{
    public function index()
    {
        $linmas = Linmas::get();

        return view('publik.linmas', compact('linmas'));
    }
}
