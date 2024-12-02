<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hallo', function () {
    return 'halo selamat datang';
});

Route::get('/hallo/apakabar', function () {
    return 'selamat datang, halo apa kabar';
});

Route::get('/hallo/{name}', function ($name) {
    return 'halo ' . $name . ' apa kabar';
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
