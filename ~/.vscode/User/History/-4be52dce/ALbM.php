<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kasir/login/',[App\Http\Controllers\authController::class, 'loginView'])->name('loginView');
Route::post('/kasir/doLogin/',[App\Http\Controllers\authController::class, 'doLogin'])->name('doLogin');
Route::get('/kasir/home/', [App\Http\Controllers\layananController::class, 'homeView'])->name('kasirHome');
Route::get('/kasir/order/', [App\Http\Controllers\layananController::class, 'orderView'])->name('kasirOrder');

