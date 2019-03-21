<?php

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

Route::get('/covoit', function () {
    return view('covoit');
});

Route::post('/covoit', 'RideController@store');

Route::get('/profile', 'ProfileController@index');
Route::get('/profile/create', 'ProfileController@create');
Route::post('/profile/create', 'ProfileController@store');

Route::get('/profile/login', 'ProfileController@login');
Route::post('/profile/verifyemail', 'ProfileController@login');
