<?php

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


Route::resource('vaccines','VaccinesController');
Route::resource('dog','DogController');
Route::resource('vaccine','VaccineController');
Route::resource('calendar','CalendarController');
Route::get('lastVaccine/{id}','VaccineController@maxIdVaccine');
Route::get('showDog/{id}','DogController@showDog');
Route::post('sendMail','MailController@sendMail');

