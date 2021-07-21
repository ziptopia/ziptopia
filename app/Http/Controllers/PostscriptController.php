<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostscriptController extends Controller
{
    public function postscript()
    {
        return view('postscript.postscript');
    }
}
