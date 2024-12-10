<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;

class partnersController
{
    public function sign_up(Request $request)
    {
        return view('partners.sign_up');
    }
}
