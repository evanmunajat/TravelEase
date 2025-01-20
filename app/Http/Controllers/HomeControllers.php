<?php

namespace App\Http\Controllers;

use App\Models\Card;

class HomeControllers extends Controller
{
    public function index()
    {
        // Kirim data ke view
        return view('frontend.home',);
    }
}