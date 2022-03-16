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

use App\Http\Middleware\HelloMiddleware;

Route::get('/', function () {
    return view('welcome');
});

//授業

Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post'); 
Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');
Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update'); 
Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove'); 
Route::get('hello/show', 'HelloController@show');

//実習問題

//2-1
Route::get('jissyu2', 'JissyuController@index');
//3-1
Route::get('jissyu3', 'Jissyu3_1Controller@index');
Route::post('jissyu3', 'Jissyu3_1Controller@post');
//3-2
Route::get('jissyu4', 'Jissyu3_2Controller@index');
Route::post('jissyu4', 'Jissyu3_2Controller@post');
//3-3,4,5
Route::get('jissyu5', 'Jissyu3_3Controller@index');
//4-1
Route::get('jissyu6', 'Jissyu4_1Controller@index');
Route::post('jissyu6', 'Jissyu4_1Controller@post');
//4-2
Route::get('jissyu7', 'Jissyu4_2Controller@index');
Route::post('jissyu7', 'Jissyu4_2Controller@post');
//4-3
Route::get('jissyu8', 'Jissyu4_3Controller@index');
Route::post('jissyu8', 'Jissyu4_3Controller@post');
//4-4
Route::get('jissyu9', 'Jissyu4_4Controller@index');
Route::post('jissyu9', 'Jissyu4_4Controller@post');
//5-1
Route::get('jissyu10', 'jissyu5_1Controller@index');
Route::get('jissyu10/show', 'jissyu5_1Controller@show'); 

//効果測定

//1-1
Route::get('kouka1_1', 'kouka1_1Controller@index');
//1-2
Route::get('kouka1_2', 'kouka1_2Controller@index');
Route::post('kouka1_2', 'kouka1_2Controller@post');
