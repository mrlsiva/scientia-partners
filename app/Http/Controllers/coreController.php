<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class coreController
{
    public function pitch_deck(Request $request)
    {
        return view('founders.core_services.pitch_deck');
    }

    public function financial_modeling(Request $request)
    {
        return view('founders.core_services.financial_modeling');
    }

    public function market_research(Request $request)
    {
        return view('founders.core_services.market_research');
    }

    public function comprehensive(Request $request)
    {
        return view('founders.core_services.comprehensive');
    }
}
