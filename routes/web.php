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

Route::get('/', 'WelcomePageController@index');
Route::get('/welcome/cards', 'WelcomePageController@showCardList');
Route::get('/welcome/cards/delete/{id}', 'WelcomePageController@deleteCard');
Route::get('/welcome/cards/edit/{id}', 'WelcomePageController@editCardForm');
Route::post('/welcome/cards/edit/{id}', 'WelcomePageController@editCard');
Route::get('/welcome/cards/new', 'WelcomePageController@newCardForm');
Route::post('/welcome/cards/new', 'WelcomePageController@storeCard');