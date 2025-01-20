<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangControllers extends Controller
{
    public function index()
    {
        // Kirim data ke view
        return view('frontend.tentang-kami',);
    }
}
