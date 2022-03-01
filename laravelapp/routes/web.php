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

//授業

Route::get('hello', 'HelloController@index'); 

//実習問題

//実習問題2-1
Route::get('jissyu2', 'JissyuController@index');