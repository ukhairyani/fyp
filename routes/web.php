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

    Route::resource('/profile', 'DriversController');

    Route::get('/offer', 'OfferController@index');
    Route::get('/offer/create', 'OfferController@create');
    Route::post('/offer', 'OfferController@store');
    // Route::get('/offer/{offer}', 'OfferController@show');
    Route::get('/offer/{offer}/edit', 'OfferController@edit');
    Route::patch('/offer/{offer}', 'OfferController@update');
    Route::delete('/offer/{offer}/delete', 'OfferController@destroy');

    Route::get('/catalog', 'BooksController@index');
    Route::get('/catalog/{offer}/details', 'BooksController@create');
    Route::post('/catalog/{offer}', 'BooksController@store');
    Route::get('/booking/{booking}/details', 'BooksController@edit'); //notification
    Route::patch('/booking/{booking}/details', 'BooksController@update'); //notification

    //Route::get('/booking/{booking}/details', 'BooksController@edit2'); //notification2


    Route::get('/notification', 'BooksController@show');
    Route::get('/notification/{notification}', 'BooksController@update');



});

Auth::routes();

Route::get('/home', 'HomeController@index');
