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

Route::resource('contacts', 'ContactController');


Route::get('/', 'WelcomeController@index')->name('home');

Route::resource('photos', 'PhotoController');



Route::get('Home', function () {
    return view('Home');
})->name('Home');




Route::get('cv', function () {
    return view('cv');
})->name('cv');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('/test/{n}', function ($n=1) {
    return "Je suis la page " . $n . ".";
})->where("n", "[0-9]+");

Route::get('/test/10', function () {
    return "Je suis la page n°10";
});

Route::get('maview', function () {
    return view('maview');
});

Route::get('maviewnomme2/{p1}/{p2}', function ($p1, $p2) {
    return "Ma view nomme" .$p1 .$p2;
})->name('home2');

Route::get('testjson', function () {
    return [2, 3, 4, 'Bonjour'];
});

Route::get('notfound', function () {
    return response('un test', 418)->header('Content-Type', 'text/plain');
});

Route::get('article/{n}', function($n) {
    return view('article')->with('numero', $n);
 })->where('n', '[0-9]+');

 Route::get('facture/{n}', function($n) {
    return view('facture')->withNumero($n);
 })->where('n', '[0-9]+');


 
 

Log::info('This', ['one', 'two', 'three']);
Log::warning('some warning');
Log::error('some error');








