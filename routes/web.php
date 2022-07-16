<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthenticationController;

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

// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Authentication

Route::get('/login', [AuthenticationController::class, 'login'])
    ->name('login')
    ->middleware('guest');

Route::post('/authenticate', [AuthenticationController::class, 'authenticate'])
    ->middleware('guest');

Route::get('/logout', [AuthenticationController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');

Route::get('/register', [AuthenticationController::class, 'create'])
    ->name('register')
    ->middleware('guest');

Route::post('/save-user', [AuthenticationController::class, 'store'])
    ->middleware('guest');
