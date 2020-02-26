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

Auth::routes();

Route::get('/home', 'TaskController@home')->name('home');
Route::post('/dashboard', 'TaskController@store')->name('dashboard');
Route::get('/insert', 'TaskController@insert');
Route::get('/retrieve', 'TaskController@retrieve')->name('retrieve');
Route::get('/edit/{id?}', 'TaskController@edit');
Route::post('/update', 'TaskController@update');
