<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prospectController
{
    public function index(Request $request)
    {
        return view('founders.prospects');
    }
}
