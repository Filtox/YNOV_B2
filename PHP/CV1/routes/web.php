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
    return view('home'); 
})->name('home');

Route::get('Mon_CV', function () {
    return view('moncv');
})->name('moncv');

Route::get('Contact', function () {
    return view('contact');
})->name('contact');