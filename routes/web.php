<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminMemberController;
use App\Http\Controllers\CounselController;
use App\Http\Controllers\GuaranteeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', function () {
    return view('index');
});

// Route::get('profile', function () {

// })->middleware('verified');

Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');

Route::namespace('Auth')->group(function () {
  Route::get('/login', [LoginController::class, 'show_login_form'])->name('login');
  Route::post('/loginAction', [LoginController::class, 'process_login'])->name('loginAction');
  Route::get('/register', [LoginController::class, 'show_signup_form'])->name('registerAction');
  Route::post('/registerAction', [LoginController::class, 'process_signup']);
  Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

// 패스워드 재설정
Route::get('/password/reset/{token}', function ($token, Request $request) {

  return view('csauth.passwordreset')->with([
    'token' => $token,
    'email' => $request->email
  ]);
});

Route::get('/counsel/counsel', [CounselController::class, 'counsel']);
Route::get('/counsel/counsel_req', [CounselController::class, 'counsel_req']);
Route::get('/counsel/counsel_free', [CounselController::class, 'counsel_free']);
Route::get('/counsel/counsel_free_req', [CounselController::class, 'counsel_free_req']);
Route::get('/counsel/service', [CounselController::class, 'service']);
Route::get('/guarantee/guarantee', [GuaranteeController::class, 'guarantee']);

// SNS Login
Route::get('login/{provider}', [LoginController::class, 'redirectToProvider'])->name('socialite.login');
Route::get('login/{provider}/callback', [LoginController::class, 'handleProviderCallback']);



Route::get('/admin/login', [AdminMemberController::class, 'show_login_form'])->name('admin.login');
Route::get('/admin/register', [AdminMemberController::class, 'show_register_form'])->name('admin.register');
Route::post('/admin/loginAction', [AdminMemberController::class, 'loginAct'])->name('admin.loginAct');
Route::post('/admin/registerAction', [AdminMemberController::class, 'registerAct'])->name('admin.registerAct');
