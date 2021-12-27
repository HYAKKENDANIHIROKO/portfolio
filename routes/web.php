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

Route::get('foodie/create','FoodieController@show')->middleware('auth')->name("create.show");
Route::post('foodie/create','FoodieController@post')->name("create.post");
Route::get('foodie/create/confirm','FoodieController@confirm')->name("create.confirm");
Route::post('foodie/create/confirm','FoodieController@send')->name("create.send");
Route::get('foodie/create/thanks','FoodieController@complete')->name("create.complete");

Route::get('foodie','FoodieController@index')->name("foodie");
Route::get('foodie/detail/{id}','FoodieController@detail')->name("foodie.detail");
Route::get('foodie/comment','FoodieController@comment');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
