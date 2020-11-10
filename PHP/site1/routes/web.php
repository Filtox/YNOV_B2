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
})->name('home');

Route::get('{n}', function ($n) {
    return 'Je suis là' . $n . ' ! ';
})->where("n", "[0-9]+");

Route::get('10', function () {
    return "Je suis à la page 10.";
});

Route::get('maview', function () {
    return view('maview');
});

Route::get('mavue/{p1}/{p2}', function ($param1, $param2) {
    return "ma vue nommée" . $param1 . $param2;
})->name('home2');

Route::get('testjson', function () {
    return [2, 3 ,4, "lol"];
});

Route::get('notfound', function () {
    return response('un test', 418)->header('Content-Type', 'text/plain');
}); 

Route::get('{n}', function ($n) {
    return "Je suis à la page " . $n . ".";
});