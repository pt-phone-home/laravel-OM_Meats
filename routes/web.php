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
Route::get('/careersitem/{id}', 'CareersController@show');



Route::get('/contact', 'PagesController@contact');
Route::get('/wholesale', 'PagesController@wholesale');
Route::get('/retail', 'PagesController@retail');
Route::get('/products', 'PagesController@products');
Route::get('/offers', 'PagesController@offers');
Route::get('/recipes', 'PagesController@recipes');
Route::get('/news', 'PagesController@news');


Route::get('/admin', 'PagesController@admin');


// Careers 
Route::get('/createcareer', 'CareersController@create');
Route::post('/createcareer', 'CareersController@store');
Route::get('/career/{id}/editcareer', 'CareersController@edit');
Route::put('/career/{id}', 'CareersController@update');
Route::delete('/career/{id}', 'CareersController@destroy');

// Offers

Route::get('/createoffer', 'OffersController@create');
Route::post('/createoffer', 'OffersController@store');
Route::get('/offer/{id}/editoffer', 'OffersController@edit');
Route::put('/offer/{id}', 'OffersController@update');
Route::delete('offer/{id}', 'OffersController@destroy');

// Recipes
Route::get('/recipeitem/{id}', 'RecipesController@show');
Route::get('/createrecipe', 'RecipesController@create');
Route::post('/createrecipe', 'RecipesController@store');
Route::get('/recipe/{id}/editrecipe', 'RecipesController@edit');
Route::put('/recipe/{id}', 'RecipesController@update');
Route::delete('/recipe/{id}', 'RecipesController@destory');

// News
Route::get('/createnewsitem', 'NewsController@create');
Route::post('/createnewsitem', 'NewsController@store');
Route::get('/newsitem/{id}/editnewsitem', 'NewsController@edit');
Route::put('/newsitem/{id}', 'NewsController@update');
Route::delete('/newsitem/{id}', 'NewsController@destroy');


