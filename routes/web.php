<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/laporan', function(){
    return view('laporan');
});

Route::post('/laporan/kirim', function(){
})->name('laporan.kirim');
