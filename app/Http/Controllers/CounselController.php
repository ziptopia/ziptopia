<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CounselController extends Controller
{
    public function index () {
        return view('counsel.counsel');
    }

    public function counsel () {
        return view('counsel.counsel');
    }

    public function counsel_free () {
        return view('counsel.counsel_free');
    }

    public function service () {
        return view('counsel.service');
    }
}
