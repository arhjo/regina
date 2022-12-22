<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LotesController extends Controller
{
    public function lotes()
    {
        return view('lotes');
    }
}
