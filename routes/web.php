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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about-us', 'GeneralController@aboutUs')->name('aboutUs');
Route::get('/contact-us', 'GeneralController@contactUs')->name('contactUs');
Route::get('/portfolio', 'GeneralController@portfolio')->name('portfolio');
