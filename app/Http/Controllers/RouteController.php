<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function homepage()
    {
        return view('pages.homepage.homepage');
    }

    
}
