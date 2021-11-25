<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\passengerController;
use App\Http\Controllers\flightController;
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

Route::get('/passengerform', function () {
    return view('form');
});

Route::get('/flightform', function () {
    return view('flightform');
});

Route::post('/store',[passengerController::class, 'store']);
Route::post('/flightStore',[flightController::class, 'store']);

Route::post('/flightStore',[flightController::class, 'store']);

Route::post('/BookedFlight2',[passengerController::class, 'bookTicket']);


Route::get('/',[passengerController::class, 'index']);
