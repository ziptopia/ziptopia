<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSessionData(Request $request)
    {
        if ($request->session()->has('user')) {
            echo $request->session()->get('user');
        } else {
            echo 'No data in the session';
        }
    }

    public function storeSessionData(Request $request)
    {
        $request->session()->put('user', 'dwmyoung@ooddy.net');
        echo "Data has been added to the session";
    }

    public function deleteSessionData(Request $request)
    {
        $request->session()->forget('user');
        echo "Data has been removed from the session";
    }
}
