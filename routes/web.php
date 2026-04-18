<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view ('dashboard');
});
Route::get('/catatantransaksi', function () {
    return view ('catatantransaksi');
});
Route::get('/login', function () {
    return view ('login');
});
Route::get('/keuangan', function () {
    return view ('ringkasankeuangan');
});

