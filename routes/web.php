<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
Route::get('/',[ AuthController::class,'index'])->name('index');

Route::get('/login-user',[ AuthController::class,'login'])->name('auth.login');
Route::post('/login-user',[ AuthController::class,'logged'])->name('auth.logged');

Route::get('/logout-user',[ AuthController::class,'logout']);

Route::get('/register-user',[ AuthController::class,'register'])->name('auth.register');
Route::post('/register-user',[ AuthController::class,'store'])->name('auth.create');

Route::get('/dashboard',[ AuthController::class,'dashboard'])->name('auth.dashboard');
