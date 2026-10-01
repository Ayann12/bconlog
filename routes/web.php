<?php

use App\Http\Controllers\KategoryProdukController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function(){
    Route::prefix('master-data')->name('master-data')->group(function(){
        Route::resource('kategory-produk', KategoryProdukController::class);
    });
});