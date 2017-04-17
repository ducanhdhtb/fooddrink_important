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

Route::get('/',['as'=>'index','uses'=>'PageController@index']);
//Route for register
Route::get('register',['as'=>'get_register','uses'=>'PageController@getRegister']);
Route::post('register',['as'=>'post_register','uses'=>'PageController@postRegister']);
//Route for login
Route::get('login',['as'=>'get_login','uses'=>'PageController@getLogin']);
Route::post('login',['as'=>'post_login','uses'=>'PageController@postLogin']);
//Route for logout
Route::get('logout',['as'=>'logout','uses'=>'PageController@logout']);
