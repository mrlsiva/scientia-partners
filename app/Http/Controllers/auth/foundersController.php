<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;

class foundersController
{
    public function sign_up(Request $request)
    {
        return view('founders.sign_up');
    }
}
