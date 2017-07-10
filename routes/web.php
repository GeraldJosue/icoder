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

//Auth routes
Auth::routes();
Route::get('/users', 'UserController@show')->name('users');
Route::post('/users/create', 'UserController@create')->name('register_create');
Route::get('/users/delete/{id}', 'UserController@delete');
Route::post('/users/update/', 'UserController@update')->name('user_update');

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

//Try_Out routes

Route::get('/try_outs', 'Try_Out_Controller@show')->name('try_outs');
Route::post('/try_outs/create', 'Try_Out_Controller@create')->name('try_out_create');
Route::get('/try_outs/delete/{id}', 'Try_Out_Controller@delete');
Route::post('/try_outs/update/', 'Try_Out_Controller@update')->name('try_out_update');


//User_Rol routes
Route::get('/user_rols', 'User_RolController@show')->name('user_rols');
Route::post('/user_rols/create', 'User_RolController@create')->name('user_rol_create');
Route::get('/user_rols/delete/{id}', 'User_RolController@delete');
Route::post('/user_rols/update/', 'User_RolController@update')->name('user_rol_update');


//Province routes 
Route::get('/provinces', 'ProvinceController@show')->name('provinces');
Route::post('/provinces', 'ProvinceController@create');
Route::get('/provinces/delete/{id}', 'ProvinceController@delete');
Route::post('/provinces/update/', 'ProvinceController@update');

//Canton routes 
Route::get('/cantons', 'CantonController@show')->name('cantons');
Route::post('/cantons', 'CantonController@create');
Route::get('/cantons/delete/{id}', 'CantonController@delete');
Route::post('/cantons/update/', 'CantonController@update')->name('canton_update');

//Edition routes 
Route::get('/editions', 'EditionsController@show')->name('editions');
Route::post('/editions', 'EditionsController@create');
Route::get('/editions/delete/{id}', 'EditionsController@delete');
Route::post('/editions/update/', 'EditionsController@update');

//Register routes
Route::get('/registration', 'EnrolleController@show')->name('registration');
Route::post('/registration/create', 'EnrolleController@create')->name('enrolle_create');
Route::post('/registration/find/{dni}', 'EnrolleController@find');
Route::post('/registration/try_outs/{dni}', 'EnrolleController@try_outs');

//Select_Sport routes
Route::get('/select_sport', 'EnrolleController@choose')->name('select_sport');
Route::post('/select_sport/multi', 'EnrolleController@import')->name('import');

//PDF
Route::post('/pdf', 'PDFController@invoice')->name('save_pdf');
Route::get('/pdf_list', 'PDFController@show');

//Reports routes
Route::get('/reports', 'ReportController@show');
Route::post('/reports/findsport/{id}', 'ReportController@find_per_sport');
Route::post('/reports/findcategory/{id}', 'ReportController@find_per_category');


