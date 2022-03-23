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

//hello
Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post'); 
Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');
Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update'); 
Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove'); 
Route::get('hello/show', 'HelloController@show');

Route::get('hello/rest', 'HelloController@rest');

Route::get('hello/session', 'HelloController@ses_get');
Route::post('hello/session', 'HelloController@ses_put'); 
//person
Route::get('person', 'PersonController@index');
Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');
Route::get('person/add', 'PersonController@add');
Route::post('person/add', 'PersonController@create');
Route::get('person/edit', 'PersonController@edit');
Route::post('person/edit', 'PersonController@update');
Route::get('person/del', 'PersonController@delete');
Route::post('person/del', 'PersonController@remove');
//board
Route::get('board', 'BoardController@index');

Route::get('board/add', 'BoardController@add');
Route::post('board/add', 'BoardController@create');
//resouce
Route::resource('rest', 'RestappController');




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
//5-2
Route::get('jissyu11', 'Jissyu5_2Controller@index');
Route::get('jissyu11/show', 'Jissyu5_2Controller@show');
Route::get('jissyu11/add', 'Jissyu5_2Controller@add');
Route::post('jissyu11/add', 'Jissyu5_2Controller@create');
Route::get('jissyu11/edit', 'Jissyu5_2Controller@edit');
Route::post('jissyu11/update', 'Jissyu5_2Controller@update');
Route::get('jissyu11/del', 'Jissyu5_2Controller@del');
Route::post('jissyu11/remove', 'Jissyu5_2Controller@remove');
//5-3
Route::get('jissyu12', 'Jissyu5_3Controller@index');
Route::get('jissyu12/show', 'Jissyu5_3Controller@show');
Route::get('jissyu12/add', 'Jissyu5_3Controller@add');
Route::post('jissyu12/create', 'Jissyu5_3Controller@create');
Route::get('jissyu12/edit', 'Jissyu5_3Controller@edit');
Route::post('jissyu12/update', 'Jissyu5_3Controller@update');
Route::get('jissyu12/del', 'Jissyu5_3Controller@del');
Route::post('jissyu12/remove', 'Jissyu5_3Controller@remove');
//6-1
Route::get('jissyu13', 'jissyu6_1Controller@index');
Route::post('jissyu13/find', 'jissyu6_1Controller@find');
//6-3
Route::get('jissyu14', 'Jissyu6_3Controller@index');
Route::post('jissyu14/find', 'Jissyu6_3Controller@find');
Route::get('jissyu14/show', 'Jissyu6_3Controller@show');
Route::get('jissyu14/add', 'Jissyu6_3Controller@add');
Route::post('jissyu14/create', 'Jissyu6_3Controller@create');
Route::get('jissyu14/edit', 'Jissyu6_3Controller@edit');
Route::post('jissyu14/update', 'Jissyu6_3Controller@update');
Route::get('jissyu14/del', 'Jissyu6_3Controller@del');
Route::post('jissyu14/remove', 'Jissyu6_3Controller@remove');
//7-1
Route::resource('jissyu7_1', 'jissyu7_1Controller');
Route::post('jissyu7_1/post', 'jissyu7_1Controller@find');	
//Resourcefulにはfind()メソッドはないので追加
Route::get('jissyu7_1/{id}/del', 'jissyu7_1Controller@del');
//Resourcefulにはdel()メソッドはないので追加



//効果測定

//1-1
Route::get('kouka1_1', 'kouka1_1Controller@index');
//1-2
Route::get('kouka1_2', 'kouka1_2Controller@index');
Route::post('kouka1_2', 'kouka1_2Controller@post');
