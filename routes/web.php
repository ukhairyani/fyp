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

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index');
    Route::get('/offer', 'OfferController@index');
    Route::get('/offer/create', 'OfferController@create');
    Route::post('/offer', 'OfferController@store');
    Route::get('/offer/{offer}', 'OfferController@show');
    Route::get('/offer/{offer}/edit', 'OfferController@edit');
    Route::patch('/offer/{offer}', 'OfferController@update');
    Route::delete('/offer/{offer}/delete', 'OfferController@destroy');
    Route::get('/catalog', 'BooksController@index');
    Route::get('/catalog/{offer}/details', 'BooksController@book');
    Route::get('/catalog/{offer}', 'BooksController@store');

    // Route::get('/find', 'OfferController@index');

});

Auth::routes();

Route::get('/home', 'HomeController@index');
