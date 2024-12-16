<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController
{
    public function home(Request $request)
    {
        return view('home');
    }
}
