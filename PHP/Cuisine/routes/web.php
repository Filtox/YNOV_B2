<?php

use App\Http\Controllers\RecetteController;
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
});

Route::resource('cuisine', RecetteController::class);

Route::get('cuisine/create', 'App\Http\Controllers\RecetteController@create');
Route::post('cuisine/create', 'App\Http\Controllers\RecetteController@create');