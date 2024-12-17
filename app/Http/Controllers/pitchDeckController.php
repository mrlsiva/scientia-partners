<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pitchDeckController
{
    public function create(Request $request)
    {
        return view('founders.pitch_decks.create');
    }

    public function template(Request $request)
    {
        return view('founders.pitch_decks.template');
    }

    public function review(Request $request)
    {
        return view('founders.pitch_decks.review');
    }

    public function status(Request $request)
    {
        return view('founders.pitch_decks.status');
    }

    public function outreach_email(Request $request)
    {
        return view('founders.pitch_decks.outreach_email');
    }

    public function cv(Request $request)
    {
        return view('founders.pitch_decks.cv');
    }
}
