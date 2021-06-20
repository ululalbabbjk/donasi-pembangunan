<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('halaman_utama');

Auth::routes(['register' => false]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard/daftardonatur',[\App\Http\Controllers\HomeController::class,'daftarDonatur'])->name('dashboard.daftardonatur');

Route::resource('donasi',\App\Http\Controllers\Donasi::class);
Route::get("/donasi/validate/{id}",[\App\Http\Controllers\Donasi::class,'validateDonation']);

Route::resource('rekening',\App\Http\Controllers\Rekening::class);
