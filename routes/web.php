<?php

use App\Http\Controllers\ParkingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource("parking", ParkingController::class);
Route::resource ("vehicle", VehicleController::class);
Route::resource("user", UserController::class);

Route::get("/",function() {
    dd(app());
});

