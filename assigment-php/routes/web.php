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

//Route::resource('admin/food','FoodController');
//Route::get('/admin/food', 'FoodController@index');
Route::resource('/admin/food', 'FoodController');
Route::get('/user/list','FoodController@userindex');
Route::resource('/admin/category', 'CategoryController');