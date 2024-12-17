<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class scientiaLibraryController
{
    public function deck_designer(Request $request)
    {
        return view('founders.scientia_libraries.deck_designer');
    }


    public function deck_template(Request $request)
    {
        return view('founders.scientia_libraries.deck_template');
    }

    public function financal_modeling(Request $request)
    {
        return view('founders.scientia_libraries.financial_modeling');
    }

    public function blog(Request $request)
    {
        return view('founders.scientia_libraries.blog');
    }

    public function podcast(Request $request)
    {
        return view('founders.scientia_libraries.podcast');
    }

    public function YT(Request $request)
    {
        return view('founders.scientia_libraries.YT');
    }

    public function market_watch(Request $request)
    {
        return view('founders.scientia_libraries.market_watch');
    }
}
