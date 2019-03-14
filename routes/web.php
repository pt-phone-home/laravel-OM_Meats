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
Route::get('/recipeitem/{id}', 'RecipesController@show');




// Routes with AUTH


    Route::get('/admin', 'PagesController@admin')->middleware('auth');

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
    Route::get('/newsitem/{id}', 'NewsController@show');
    Route::get('/createnewsitem', 'NewsController@create')->middleware('auth');
    Route::post('/createnewsitem', 'NewsController@store')->middleware('auth');
    Route::get('/newsitem/{id}/editnewsitem', 'NewsController@edit')->middleware('auth');
    Route::put('/newsitem/{id}', 'NewsController@update')->middleware('auth');
    Route::delete('/newsitem/{id}', 'NewsController@destroy')->middleware('auth');

    // LOGIN

    Route::get('login', 'PagesController@login')->name('login');
    Route::post('login', 'PagesController@logincheck')->name('login.post');
    Route::get('logout', 'PagesController@logout')->name('logout');







