<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\BannerController;
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


Route::group(['middleware' => 'auth'], function () {

    // dashboard
    Route::get('/banner', [BannerController::class, 'index']);
});
