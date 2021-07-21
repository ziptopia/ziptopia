<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuaranteeController extends Controller
{
    public function index () {
        return view('guarantee.guarantee');
    }

    public function guarantee () {
        return view('guarantee.guarantee');
    }

    public function guarantee_company()
    {
        return view('guarantee.guarantee_company');
    }
}
