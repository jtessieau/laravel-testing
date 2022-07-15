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
Route::get('/', [HomeController::class, 'index']);

// Authentication

Route::get('/login', [AuthenticationController::class, 'login']);
Route::post('/authenticate', [AuthenticationController::class, 'authenticate']);

Route::get('/logout', [AuthenticationController::class, 'logout']);

Route::get('/register', [AuthenticationController::class, 'register']);
Route::post('/save-user', [AuthenticationController::class, 'saveUser']);
