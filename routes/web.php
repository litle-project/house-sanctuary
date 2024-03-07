<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\HotelController;
use App\Http\Controllers\Website\DealController;
use App\Http\Controllers\Website\MeetingController;
use App\Http\Controllers\Website\WeedingController;
use App\Http\Controllers\Website\NewsController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/hotel', [HotelController::class, 'index']);
Route::get('/deal', [DealController::class, 'index']);
Route::get('/meeting', [MeetingController::class, 'index']);
Route::get('/weeding', [WeedingController::class, 'index']);
Route::get('/news', [NewsController::class, 'index']);
