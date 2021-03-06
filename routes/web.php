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
Route::group(['prefix'=>'admin'],function(){
	Route::get('profile/create','Admin\ProfileController@add');
	Route::get('profile/edit','Admin\ProfileController@edit');
});
Route::get('admin/news/create','Admin\NewsController@add');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'],function(){
	Route :: get('news/create','Admin\NewsController@add') -> middleware('auth');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', 'HomeController@test')->name('test');