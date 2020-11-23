<?php

use Illuminate\Http\Request;


Route::resource('vaccines','VaccinesController');
Route::resource('dog','DogController');
Route::resource('vaccine','VaccineController');
Route::resource('calendar','CalendarController');
Route::get('lastVaccine/{id}','VaccineController@maxIdVaccine');
Route::get('showDog/{id}','DogController@showDog');

