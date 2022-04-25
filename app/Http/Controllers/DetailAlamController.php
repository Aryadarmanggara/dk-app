<?php

namespace App\Http\Controllers;

use App\Models\Alam;
use Illuminate\Http\Request;

class DetailAlamController extends Controller
{
    public function index($slug)
    {
        $alam = Alam::where('slug', $slug)->first();
        return view('publik.detail_alam', compact('alam'));
    }
}
