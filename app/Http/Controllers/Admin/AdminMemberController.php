<?php

namespace App\Http\Controllers\Admin;

use Validator;
use Session;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Admin;

class AdminMemberController extends Controller
{

    use AuthenticatesUsers;
    
    public function __construct()
    {  
        $this->middleware('guest:admin')->except('logout');
    }

    public function index()
    {
        if (session()->get('adminuser')){
            return view('admin.index');
        } else {
            return redirect('/admin/login');
        }
    }

    public function show_login_form()
    {
        return view('admin.auth.login', ['url' => 'admin']);
    }

    public function loginAct(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        
        // $adminuser = Admin::where('email',$request->email)->first();
        $adminuser = DB::table('adminmember')->where('email', $request->email)->first();

        if (!isset($adminuser->email) || $adminuser->email == '') {

            $result = array(
                'result' => 'error',
                'message' => '존재하지 않는 이메일 입니다.',
                'redirect' => '/'
            );            
        
            return $result;
        }

        if ($adminuser->isUse != 'Y') {

            $result = array(
                'result' => 'error',
                'message' => '접근권한이 없습니다.',
                'redirect' => '/'
            );            
        
            return $result;
        }

        if (Hash::check($request->password, $adminuser->password)) {

            $credentials = $request->except(['_token']);

            // if (Auth::guard('admin')->attempt($credentials)) {
            //     return redirect();
            // }

            session([
                'adminuser' => $request->email
            ]);

            $request->session()->flash('status', 'Task was successful!');

            $result = array(
                'result' => 'success',
                'message' => '로그인 성공',
                'redirect' => '/admin'
            );

        } else {

            $result = array(
                'result' => 'error',
                'message' => '비밀번호가 일치하지 않습니다.',
                'redirect' => '/admin/login'
            );
        }

        return $result;
    }

    public function show_register_form()
    {
        return view('admin.auth.register');
    }

    public function registerAct(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:adminmember',
            'password' => 'required|min:6',
            'name' => 'required',
            'phone' => 'required'
        ]);

        $data = $request->all();
        $insert = $this->insert($data);

        if ($insert) {

            $result = array(
                'result' => 'success',
                'message' => '관리자 등록 성공',
                'redirect' => '/admin/'
            );
           
        } else {

            $result = array(
                'result' => 'error',
                'message' => '관리자 등록 실패',
                'redirect' => '/admin/register'
            );
            
        }

        return $result;

    }

    public function insert(array $data)
    {

        return DB::table('adminmember')->insert([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'name' => $data['name'],
            'phone' => preg_replace("/([^0-9]+)/", "", $data['phone'])
        ]);
    }

    // public function dashboard()
    // {
    //     if (Auth::check()) {
    //         return view('/admin/');
    //     }

    //     return redirect('/admin/login')->with('success', 'You are not allowed to access');
    // }

    public function logout()
    {
        // $request->session()->flush();
        auth()->guard('admin')->Auth::logout();
        Session()->flush();

        return Redirect('/admin/login');
    }
}
