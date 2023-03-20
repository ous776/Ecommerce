<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

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

Route::get('/', function () {
    // return view('index');
});

Route::get('/', [GuestController::class, 'index']);
Route::get('/electronic', [GuestController::class, 'electronic']);
Route::get('/fashion', [GuestController::class, 'fashion']);
Route::get('/jewellery', [GuestController::class, 'jewellery']);