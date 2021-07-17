<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'pw' => 'required'
        ]);

        $credentials = $request->only('email', 'pw');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                            ->with('success', 'Signed in');
        }

        return redirect("login")->with('success', 'Login details are not valied');
    }

    public function registation()
    {
        return view('auth.registration');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customer',
            'pw' => 'required|min:8'
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect('dashboard')->with('success', 'You have signed-in');
    }

    public function create(array $data)
    {
        return customer::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'pw'=> Hash::make($data['pw'])
        ]);
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect('login')->with('success', 'You are not allowed to access');
    }

    public function signOut(Request $request)
    {
        $request->session()->flush();
        Auth::logout();

        return Redirect('login');
    }
}
