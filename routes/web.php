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

Auth::routes();

Route::resource('trader_categories', 'TraderCategoryController')->except(['show','delete']);
Route::get('trader_categories/{trader_category}', 'TraderCategoryController@destroy')->name('trader_categories.destroy');

Route::get('/home', 'HomeController@index')->name('home');
