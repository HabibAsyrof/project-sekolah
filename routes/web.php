<?php

use App\Http\Controllers\adminController;
use App\Models\kategori;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login-admin');
});

Route::get('/admin', function () {
    return view('login-admin');
});

Route::get('/adminDashboard', function () {
    return view('/dashboard',[
        'data' => kategori::all()
    ]);
});


Route::post('/login',[adminController::class,"authenticate"]);

Route::get('/halaman-utama', function () {
    return view('halaman-utama');
});

