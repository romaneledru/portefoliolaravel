<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function gsb()
    {
        return view('gsb');
    }

    public function stagewess()
    {
        return view('stagewess');
    }

    public function construction()
    {
        return view('construction');
    }

    public function veilletech()
    {
        return view('veilletech');
    }
    public function applicsharp()
    {
        return view('applicsharp');
    }
    public function stage2()
    {
        return view('stage2');
    }

    public function engagement()
    {
        return view('engagement');
    }
}
