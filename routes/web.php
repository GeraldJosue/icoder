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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Sport routes
Route::get('/sports', 'SportsController@show')->name('sports');

Route::post('/sports', 'SportsController@create');

Route::get('/sports/delete/{id}', 'SportsController@delete');

Route::post('/sports/update/', 'SportsController@update');

//Category routes
Route::get('/categories', 'CategoriesController@show')->name('categories');

Route::post('/categories/create', 'CategoriesController@create')->name('category_create');

Route::get('/categories/delete/{id}', 'CategoriesController@delete');

Route::post('/categories/update/', 'CategoriesController@update')->name('category_update');




