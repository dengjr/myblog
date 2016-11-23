<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::any('/login', ['uses'=>'Admin\LoginController@login']);
Route::get('/kit/captcha', 'Admin\KitController@captcha');

Route::group(['middleware'=>['web','admin.logining']],function(){
	Route::any('/',['uses'=>'Admin\AdminController@index']);
	Route::any('/info',['uses'=>'Admin\AdminController@info']);
	Route::any('/pass',['uses'=>'Admin\AdminController@pass']);
	Route::any('/page',['uses'=>'Admin\AdminController@page']);
	Route::any('/adv',['uses'=>'Admin\AdminController@adv']);
	Route::any('/book',['uses'=>'Admin\AdminController@book']);
	Route::any('/column',['uses'=>'Admin\AdminController@column']);
	Route::any('/list',['uses'=>'Admin\AdminController@list1']);
	Route::get('/tips',['uses'=>'Admin\AdminController@tips']);
	Route::any('/cate',['uses'=>'Admin\AdminController@cate']);
	Route::any('/add',['uses'=>'Admin\AdminController@add']);
	Route::get('/cms',['uses'=>'Admin\AdminController@cms']);
	Route::any('/clear',['uses'=>'Admin\AdminController@clearSession']);
});