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

Route::get('/', 'PagesController@index')->name('home')->middleware('auth'); // DOESN"T NEED AUTH
Route::get('/about', 'PagesController@about')->name('about')->middleware('auth'); // DOESN"T NEED AUTH
Route::get('/quality', 'PagesController@quality')->name('quality')->middleware('auth'); // DOESN"T NEED AUTH
Route::get('/careers', 'PagesController@careers')->name('careers')->middleware('auth'); // DOESN"T NEED AUTH
Route::get('/careersitem/{id}', 'CareersController@show')->name('careers.item')->middleware('auth'); // DOESN"T NEED AUTH

Route::get('/contact', 'PagesController@contact')->name('contact')->middleware('auth'); // DOESN"T NEED AUTH
Route::get('/wholesale', 'PagesController@wholesale')->name('wholesale')->middleware('auth'); // DOESN"T NEED AUTH
Route::get('/retail', 'PagesController@retail')->name('retail')->middleware('auth'); // DOESN"T NEED AUTH
Route::get('/products', 'PagesController@products')->name('products')->middleware('auth'); // DOESN"T NEED AUTH
Route::get('/offers', 'PagesController@offers')->name('offers')->middleware('auth'); // DOESN"T NEED AUTH
Route::get('/recipes', 'PagesController@recipes')->name('recipes')->middleware('auth'); // DOESN"T NEED AUTH
Route::get('/news', 'PagesController@news')->name('news')->middleware('auth'); // DOESN"T NEED AUTH
Route::get('/recipeitem/{id}', 'RecipesController@show')->name('recipe.item')->middleware('auth'); // DOESN"T NEED AUTH

// Routes with AUTH

Route::get('/admin', 'PagesController@admin')->name('admin')->middleware('auth');

// Careers
Route::get('/createcareer', 'CareersController@create')->middleware('auth');
Route::post('/createcareer', 'CareersController@store')->middleware('auth');
Route::get('/career/{id}/editcareer', 'CareersController@edit')->middleware('auth');
Route::put('/career/{id}', 'CareersController@update')->middleware('auth');
Route::delete('/career/{id}', 'CareersController@destroy')->middleware('auth');

// Offers

Route::get('/createoffer', 'OffersController@create')->middleware('auth');
Route::post('/createoffer', 'OffersController@store')->middleware('auth');
Route::get('/offer/{id}/editoffer', 'OffersController@edit')->middleware('auth');
Route::put('/offer/{id}', 'OffersController@update')->middleware('auth');
Route::delete('offer/{id}', 'OffersController@destroy')->middleware('auth');

// Recipes

Route::get('/createrecipe', 'RecipesController@create')->middleware('auth');
Route::post('/createrecipe', 'RecipesController@store')->middleware('auth');
Route::get('/recipe/{id}/editrecipe', 'RecipesController@edit')->middleware('auth');
Route::put('/recipe/{id}', 'RecipesController@update')->middleware('auth');
Route::delete('/recipe/{id}', 'RecipesController@destory')->middleware('auth');

// News
Route::get('/newsitem/{id}', 'NewsController@show')->middleware('auth'); // DOESN'T NEED AUTH
Route::get('/createnewsitem', 'NewsController@create')->middleware('auth');
Route::post('/createnewsitem', 'NewsController@store')->middleware('auth');
Route::get('/newsitem/{id}/editnewsitem', 'NewsController@edit')->middleware('auth');
Route::put('/newsitem/{id}', 'NewsController@update')->middleware('auth');
Route::delete('/newsitem/{id}', 'NewsController@destroy')->middleware('auth');

// LOGIN

Route::get('login', 'PagesController@login')->name('login'); // DOESN"T NEED AUTH
Route::post('login', 'PagesController@logincheck')->name('login.post'); // DOESN"T NEED AUTH
Route::get('logout', 'PagesController@logout')->name('logout'); // DOESN"T NEED AUTH
Route::get('changepassword', 'PagesController@changepassword')->name('changepassword')->middleware('auth');
Route::post('changepassword', 'PagesController@changepasswordPost')->name('changepassword.post')->middleware('auth');
