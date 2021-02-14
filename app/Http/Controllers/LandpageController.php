<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandpageController extends Controller
{
    public function landpage()
    {
       return view('landpage');
    }

    public function homepage()
    {
        return view ('homepage');
    }
}
