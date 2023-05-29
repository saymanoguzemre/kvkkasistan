<?php

namespace App\Http\Controllers;

use App\Models\Sitesetting;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function homepage()
    {
        return view('pages.homepage.homepage');
    }

    public function aydinlatma()
    {
        return view('aydinlatma', ['aydinlatma' => Sitesetting::find(1)->content]);
    }
    public function acikriza()
    {
        return response()->file(public_path('acikriza.pdf'));
    }

}
