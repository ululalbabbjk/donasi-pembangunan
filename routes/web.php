<?php

use App\Models\Donatur;
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
Auth::routes(['register' => false]);
Route::get('/', [\App\Http\Controllers\Front::class,'index'])->name('halaman_utama');
Route::resource('donasi',\App\Http\Controllers\Donasi::class);
Route::get("/donasi/validate/{id}",[\App\Http\Controllers\Donasi::class,'validateDonation']);
Route::get('/galery',[\App\Http\Controllers\Front::class,'galery']);
Route::get('/daftardonatur',[\App\Http\Controllers\Front::class,'daftardonatur']);

//Dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/dashboard/daftardonatur',[\App\Http\Controllers\HomeController::class,'daftarDonatur'])->name('dashboard.daftardonatur');
    Route::get('/validate',[\App\Http\Controllers\Donasi::class,'be_validate']);
    Route::resource('rekening',\App\Http\Controllers\Rekening::class);
    Route::resource('gambar',\App\Http\Controllers\Gambar::class);
    Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class,'logout']);
});
