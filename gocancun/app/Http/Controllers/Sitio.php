<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sitio extends Controller
{
    public function home()
    {
    	return view('home');
    }
}
