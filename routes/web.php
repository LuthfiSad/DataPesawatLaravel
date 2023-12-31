<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\PesawatController;
use App\Http\Controllers\registerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "  web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
  })->name('dashboard')->middleware('auth');

Route::get('/', [loginController::class, 'login'])->name('login')->middleware('guest'); 
Route::post('/log', [loginController::class, 'validasi'])->name('login.store'); 
Route::post('/logout', [loginController::class, 'logout'])->name('logout'); 
Route::get ('/register',[registerController::class,'register'])->name('register');
Route::post ('/regist',[registerController::class,'store'])->name('register.store');

Route::resource('/pesawats', PesawatController::class)->except('show');