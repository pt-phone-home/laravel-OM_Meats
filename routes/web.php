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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/quality', 'PagesController@quality');
Route::get('/careers', 'PagesController@careers');
Route::get('/contact', 'PagesController@contact');
Route::get('/wholesale', 'PagesController@wholesale');
Route::get('/retail', 'PagesController@retail');
Route::get('/products', 'PagesController@products');
Route::get('/offers', 'PagesController@offers');
Route::get('/recipes', 'PagesController@recipes');
Route::get('/news', 'PagesController@news');


// Careers 
Route::get('/createcareer', 'CareersController@create');

