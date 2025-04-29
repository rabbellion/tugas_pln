<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/laporan', function(){
    return view('laporan');
});

Route::get('/dashboard', function ( ){
    return view('admin.dashboard', ['title' => 'Dashboard']);
});

Route::post('/laporan/umum', function(){
})->name('laporan.umum');
Route::post('/laporan/pelanggan', function(){
})->name('laporan.pelanggan');



