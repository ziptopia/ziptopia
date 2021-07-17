<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Arr;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\TryCatch;

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
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->except(['_token']);

        $user = User::where('email',$request->email)->first();

        if (Auth::attempt($credentials)) {

            $request->session()->put('user', $request->email);

            session([
                'user' => $request->email
            ]);

            $request->session()->flash('status', 'Task was successful!');

            // return redirect()->route('/');
            return true;

        }else{
            session()->flash('message', 'Invalid credentials');
            return redirect()->back();
        }
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
            'password' => bcrypt($request->input('password')),
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

            //  이미 있는 이메일일 경우 기존 이메일정보에 포함
            $chk_email = User::where('email', $user->email)->first();
            if ($chk_email) {
                
                if ($provider == 'naver') {
                    User::where('email', $user->email)->update(array('naver_id' => $user->id));
                } else if ($provider == 'kakao') {
                    User::where('email', $user->email)->update(array('kakao_id' => $user->id));
                } else if ($provider == 'google') {
                    User::where('email', $user->email)->update(array('google_id' => $user->id));
                }
                
                Auth::login($chk_email);
                return redirect('/');
            }
    
            if ($provider == 'naver') {
                $finduser = User::where('naver_id', $user->id)->first();
            } else if ($provider == 'kakao') {
                $finduser = User::where('kakao_id', $user->id)->first();
            } else if ($provider == 'google') {
                $finduser = User::where('google_id', $user->id)->first();
            }
    
            if ($finduser) {
                Auth::login($finduser);
                return redirect('/');
            } else {

                if ($provider == 'naver') { 

                    $newUser = User::create([
                        'name' => $user->name,
                        'email' => $user->email,
                        'naver_id' => $user->id,
                        'password' => bcrypt(uniqid())
                    ]);

                } else if ($provider == 'kakao') {

                    $newUser = User::create([
                        'name' => $user->name,
                        'email' => $user->email,
                        'kakao_id' => $user->id,
                        'password' => bcrypt(uniqid())
                    ]);

                } else if ($provider == 'google') {

                    $newUser = User::create([
                        'name' => $user->name,
                        'email' => $user->email,
                        'google_id' => $user->id,
                        'password' => bcrypt(uniqid())
                    ]);

                }
    
                Auth::login($newUser);
                return redirect('/');
            }

        // } catch (Exception $e) {
        //     // return redirect('/');
        //     return false;
        // }
    }
}
