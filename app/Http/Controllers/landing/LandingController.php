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

    public function about()
    {
        return view('landing.about', [
            'title' => 'About',
            'logo' => 'assets/logo-jamuan.png',
        ]);
    }

    public function services()
    {
        return view('landing.services', [
            'title' => 'Services',
            'logo' => 'assets/logo-jamuan.png',
        ]);
    }

    public function error()
    {
        return view('error', [
            'title' => 'Error',
            'logo' => 'assets/logo-jamuan.png',
        ]);
    }
}
