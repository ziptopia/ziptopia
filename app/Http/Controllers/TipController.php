<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipController extends Controller
{

    public function tipmain()
    {
        return view('tip.tipmain');
    }
    
    public function tip01()
    {
        return view('tip.tip01');
    }

    public function tip02()
    {
        return view('tip.tip02');
    }

    public function tip03()
    {
        return view('tip.tip03');
    }

    public function tip04()
    {
        return view('tip.tip04');
    }

    public function tip05()
    {
        return view('tip.tip05');
    }

    public function tip06()
    {
        return view('tip.tip06');
    }

}
