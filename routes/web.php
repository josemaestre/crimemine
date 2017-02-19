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


Route::resource('crimen', 'CrimenController');

Route::get('dashboard', 'KpiController@index');


Route::resource('delitos', 'DelitosController');
//Route::resource('itemCRUD','ItemCRUDController');

Route::get('delitos/show/{id}', 'DelitosController@show');
Route::get('delitos/{id}/edit', 'DelitosController@edit');
Route::get('delitos/{id}/update', 'DelitosController@update');