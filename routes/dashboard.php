<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\MainController;
use App\Http\Controllers\Dashboard\AuthController;

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

// authentication
Route::get('/login', [AuthController::class, 'page']);
Route::post('/login', [AuthController::class, 'login']);

// dashboard
Route::get('/', [MainController::class, 'index']);
