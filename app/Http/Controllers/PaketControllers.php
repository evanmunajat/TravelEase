<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketControllers extends Controller
{
    public function index()
    {
        // Kirim data ke view
        return view('frontend.paket-travel',);
    }
}
