<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home()
    {
        return view('landing.home', [
            'title' => 'Home',
            'logo' => 'assets/logo-jamuan.png',
        ]);
    }
}
