<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('indexes.index');
    }

    public function aboutUs()
    {
        return view('indexes.about_us');
    }

    public function visionMission()
    {
        return view('indexes.vision_mission');
    }
}
