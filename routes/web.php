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
});
Route::get('/vous-etes-opticien', function () {
    return view('opticien');
});
Route::get('/espace-franchise', function () {
    return view('franchise');
});
Route::get('/trouver-un-centre', function () {
    return view('centre');
});

Route::post('/sendMail', 'App\Http\Controllers\InfoController@sendMail');
