<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Exception;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function show_login_form()
    {
        return view('auth.login');
    }

    public function process_login(Request $request)
    {

        $result = array();

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->except(['_token']);

        $user = User::where('email',$request->email)->first();

        if (!isset($user->email) || $user->email == '') {

            $result = array(
                'result' => 'error',
                'message' => '존재하지 않는 이메일 입니다.',
                'redirect' => '/'
            );            
        
            return $result;
        }

        if (Auth::attempt($credentials)) {

            if (Hash::check($request->password, $user->password)) {

                $request->session()->put('user', $request->email);

                session([
                    'user' => $request->email
                ]);
    
                $request->session()->flash('status', 'Task was successful!');

                $result = array(
                    'result' => 'success',
                    'message' => '로그인 성공',
                    'redirect' => '/'
                );

            } else {

                $result = array(
                    'result' => 'error',
                    'message' => '비밀번호가 일치하지 않습니다.',
                    'redirect' => '/'
                );

            }

            // return redirect()->route('/');

        }else{
            session()->flash('message', 'Invalid credentials');

            $result = array(
                'result' => 'error',
                'message' => 'Invalid credentials',
                'redirect' => '/'
            );            
            // return redirect()->back();
        }

        return $result;
    }
    public function show_signup_form()
    {
        return view('auth.register');
    }
    public function process_signup(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::create([
            'name' => trim($request->input('name')),
            'email' => strtolower($request->input('email')),
            'password' => Hash::make($request->input('password'))
        ]);

        session()->flash('message', 'Your account is created');

        // return redirect()->route('/');
        return true;
    }
    public function logout()
    {

        session()->flush();
        Auth::logout();

        // return redirect()->route('/');
        return true;
    }

    public function UserInfo()
    {
        $user = Auth::user();

        return $user;
    }

    /*
     * Redirect the user to the Naver authentication page
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /*
     * Obtain the user information from Naver.
     */
    public function handleProviderCallback($provider)
    {

        // try {
            
            $user = Socialite::driver($provider)->user();
            $column_name = $provider . "_id";

            //  이미 있는 이메일일 경우 기존 이메일정보에 포함
            $chk_email = User::where('email', $user->email)->first();
            if ($chk_email) {

                User::where('email', $user->email)->update(array($column_name => $user->id));
                
                Auth::login($chk_email);
                return redirect('/');
            }
    
            $finduser = User::where($column_name, $user->id)->first();

    
            if ($finduser) {
                Auth::login($finduser);
                return redirect('/');
            } else {

                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    $column_name => $user->id,
                    'password' => bcrypt(uniqid())
                ]);
    
                Auth::login($newUser);
                return redirect('/');
            }

        // } catch (Exception $e) {
        //     // return redirect('/');
        //     return false;
        // }
    }


}
