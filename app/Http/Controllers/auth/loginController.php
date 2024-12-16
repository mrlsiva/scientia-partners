<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;

class loginController
{
    public function login(Request $request)
    {
        return view('login');
    }

    public function sign_in(Request $request)
    {
        return "Login Check";
    }
}
