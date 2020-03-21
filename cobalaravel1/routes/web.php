<?php

use Illuminate\Support\Facades\Route;


Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');
Route::get('/mahasiswa','MahasiswaController@index');


//students
Route::get('/students','StudentsController@index');
Route::get('/students/create','StudentsController@create');
Route::get('/students/{student}','StudentsController@show');
Route::POST('/students','StudentsController@store');
