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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group(['prefix'=>'kasir','middleware'=>['auth'], 'as' => 'kasir.']){

}
//route page
Route::get('/kasir/login/',[App\Http\Controllers\authController::class, 'loginView'])->name('loginView');
Route::get('/kasir/home/', [App\Http\Controllers\layananController::class, 'homeView'])->name('kasirHome')->middleware('auth');
Route::get('/kasir/order/', [App\Http\Controllers\layananController::class, 'orderView'])->name('kasirOrder')->middleware('auth');
Route::get('/kasir/order/tambahorder/', [App\Http\Controllers\layananController::class, 'tambahorder'])->name('tambahOrder')->middleware('auth');

//api route
Route::post('/kasir/doLogin/',[App\Http\Controllers\authController::class, 'doLogin'])->name('doLogin');
Route::post('/kasir/order/tambahorder/doOrder', [App\Http\Controllers\layananController::class, 'simpanorder'])->name('doOrder');
Route::get('/kasir/order/hapus/{id}', [App\Http\Controllers\layananController::class, 'hapusorder'])->name('hapusOrder');