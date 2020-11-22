<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
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
// asa
Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/user', function () {
    return view('admin.user');
})->name('user'); */
// Route::get('/car', function () {
//     return view('admin.car');
// })->name('car');

// Route::get('/bookcar', function () {
//     return view('admin.bookedcar');
// })->name('bookcar');

Route::get('/bookcar', function () {
    return view('admin.bookedcar');
})->name('bookcar');

Route::get('/car',[CarController::class,'list'])->name('car');
Route::post('/car',[CarController::class,'addcar']);
Route::post('/car/{id}',[CarController::class,'editCar']);

Route::get('get-carlist',[CarController::class,'getCarList']);
Route::post('/car/{id}',[CarController::class,'editCar']);

Route::get('/user',[UserController::class,'list'])->name('user');
Route::get('get-userlist',[UserController::class,'getuserList']);
