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
    return view('index');
});

Route::get('/add', function() {
    return view('add');
});
Route::post('/add/ride', 'RideController@store');

Route::get('/search', function() {
    return view('search');
});

Route::post('/covoit', 'RideController@store');
Route::post('/covoit/search', 'RideController@showAllRides');

Route::get('/rides', 'RideController@showAllRides');

Route::post('/results', 'RideController@showRides');

//Route::get('/results', 'RideController@')


