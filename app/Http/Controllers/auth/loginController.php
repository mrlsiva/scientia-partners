<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;

class loginController
{
    public function sign_in(Request $request)
    {
        return view('sign_in');
    }
}
