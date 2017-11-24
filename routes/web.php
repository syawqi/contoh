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

Route::get('/', 'ContohController@index');
Route::get('delete/{id}', 'ContohController@delete');
Route::get('edit/{id}', 'ContohController@edit');
Route::post('edit/{id}','ContohController@update');
Route::get('add','ContohController@add');
Route::post('add','ContohController@save');
