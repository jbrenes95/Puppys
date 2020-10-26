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

use App\Dog;

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::resource('dog','DogController');
Route::get('/dog','DogController@index');
Route::get('/dog/{id}','DogController@show');
Route::get('/dog/create','DogController@create');
Route::patch('/dog/{id}','DogController@update');
Route::delete('/dog/{id}','DogController@destroy');



