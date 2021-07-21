<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminMemberController;
use App\Http\Controllers\CounselController;
use App\Http\Controllers\GuaranteeController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\PostscriptController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\SubController;
use App\Http\Controllers\TipController;
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
Route::get('/guarantee/guarantee_company', [GuaranteeController::class, 'guarantee_company']);

Route::get('/postscript/postscript', [PostscriptController::class, 'postscript']);
Route::get('/process/process', [ProcessController::class, 'process']);

Route::get('/tip/tipmain', [TipController::class, 'tipmain']);
Route::get('/tip/tip01', [TipController::class, 'tip01']);
Route::get('/tip/tip02', [TipController::class, 'tip02']);
Route::get('/tip/tip03', [TipController::class, 'tip03']);
Route::get('/tip/tip04', [TipController::class, 'tip04']);
Route::get('/tip/tip05', [TipController::class, 'tip05']);
Route::get('/tip/tip06', [TipController::class, 'tip06']);

Route::get('/sub/access_terms', [SubController::class, 'access_terms']);
Route::get('/sub/ssago', [SubController::class, 'ssago']);

Route::get('/mypage', [MypageController::class, 'index']);

// SNS Login
Route::get('login/{provider}', [LoginController::class, 'redirectToProvider'])->name('socialite.login');
// Route::get('login/{provider}/callback', [LoginController::class, 'handleProviderCallback']);


Route::get('/admin', [AdminMemberController::class, 'main'])->name('admin.index');
Route::get('/admin/login', [AdminMemberController::class, 'show_login_form'])->name('admin.login');
Route::get('/admin/register', [AdminMemberController::class, 'show_register_form'])->name('admin.register');
Route::post('/admin/loginAction', [AdminMemberController::class, 'loginAct'])->name('admin.loginAct');
Route::post('/admin/registerAction', [AdminMemberController::class, 'registerAct'])->name('admin.registerAct');
