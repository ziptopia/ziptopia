<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CounselController;
use App\Http\Controllers\GuaranteeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');

Route::namespace('Auth')->group(function () {
  Route::get('/login', [LoginController::class, 'show_login_form'])->name('login');
  Route::post('/loginAction', [LoginController::class, 'process_login'])->name('loginAction');
  Route::get('/register', [LoginController::class, 'show_signup_form'])->name('registerAction');
  Route::post('/registerAction', [LoginController::class, 'process_signup']);
  Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::get('/counsel/counsel', [CounselController::class, 'counsel']);
Route::get('/counsel/counsel_free', [CounselController::class, 'counsel_free']);
Route::get('/counsel/service', [CounselController::class, 'service']);
Route::get('/guarantee/guarantee', [GuaranteeController::class, 'guarantee']);

// SNS Login
Route::get('login/{provider}', [LoginController::class, 'redirectToProvider'])->name('socialite.login');
Route::get('login/{provider}/callback', [LoginController::class, 'handleProviderCallback']);