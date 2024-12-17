<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class alliedController
{
    public function legal(Request $request)
    {
        return view('founders.allied_services.legal');
    }

    public function regulatory(Request $request)
    {
        return view('founders.allied_services.regulatory');
    }

    public function copyright(Request $request)
    {
        return view('founders.allied_services.copyright');
    }

    public function development(Request $request)
    {
        return view('founders.allied_services.development');
    }

    public function accounting(Request $request)
    {
        return view('founders.allied_services.accounting');
    }
}
