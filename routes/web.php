<?php

use App\Http\Controllers\login;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login_pelajar', function () {
    return view('login_pelajar');
});

Route::get('/login_pengajar', function () {
    return view('login_pengajar');
});

Route::get('/regis_pengajar', function () {
    return view('regis_pengajar');
});

Route::get('/regis_pelajar', function () {
    return view('regis_pelajar');
});

Route::get('/dashboard_pelajar', function () {
    return view('dashboard_pelajar');
});

Route::get('/cari_tutor_pelajar', function () {
    return view('cari_tutor_pelajar');
});

Route::get('/monitoring_pelajar', function () {
    return view('monitoring_pelajar');
});

Route::get('/login', [login::class, 'pelajar'])->name('login.pelajar');
Route::get('/login/pelajar', [login::class, 'pelajar'])->name('login.pelajar');
Route::get('/login/pengajar', [login::class, 'pengajar'])->name('login.pengajar');

