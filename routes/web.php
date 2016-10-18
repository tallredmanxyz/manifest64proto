<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/immigrants', 'ImmigrantController@index');

Route::get('/immigrants/{arrival_id}', 'ImmigrantController@show');


Route::get('/search', 'SearchController@getSearch');

Route::get('/ships', 'ShipController@index');

Route::get('/ships/{ship_name}', 'ShipController@show');

Route::get('/ships/{ship_name}/{date_of_arrival}', 'ShipController@voyage');

