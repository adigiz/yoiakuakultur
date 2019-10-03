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

Route::get('/', 'PageController@index');
Route::get('/welcome/cards', 'PageController@showCardList');
Route::get('/welcome/cards/delete/{id}', 'PageController@deleteCards');
Route::get('/welcome/cards/edit/{id}', 'PageController@editCardForm');
Route::post('/welcome/cards/edit/{id}', 'PageController@editCard');
Route::get('/welcome/cards/new', 'PageController@form');
Route::post('/welcome/cards/new', 'PageController@upload');