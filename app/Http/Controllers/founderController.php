<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class founderController
{
    public function dashboard(Request $request)
    {
        return view('founders.dashboard');
    }
}
