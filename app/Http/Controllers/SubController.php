<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubController extends Controller
{
    public function access_terms()
    {
        return view('sub.access_terms');
    }

    public function ssago()
    {
        return view('sub.ssago');
    }
}
