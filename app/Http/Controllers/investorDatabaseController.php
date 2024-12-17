<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class investorDatabaseController
{
    public function free_db(Request $request)
    {
        return view('founders.investors.free_db');
    }

    public function full_db(Request $request)
    {
        return view('founders.investors.full_db');
    }

    public function addition_to_db(Request $request)
    {
        return view('founders.investors.addition_to_db');
    }
}
