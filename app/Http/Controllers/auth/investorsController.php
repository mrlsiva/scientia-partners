<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;

class investorsController
{
    public function sign_up(Request $request)
    {
        return view('investors.sign_up');
    }
}
