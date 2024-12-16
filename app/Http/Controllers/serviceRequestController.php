<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviceRequestController
{
    public function index(Request $request)
    {
        return view('founders.service_request');
    }
}
