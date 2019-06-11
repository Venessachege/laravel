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
Route::get('/student', 'homeController@studentsForm');
Route::get('/fees', 'homeController@feesForm');

Route::POST('storeStudent','StudentController@storeStudent');
Route::POST('retrieve','homeController@retrieve');
Route::POST('storeFees','FeesController@storeFees');



Route::get('/', 'homeController@index');
