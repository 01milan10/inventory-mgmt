<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/items/create', 'HomeController@create')->name('items.create');
Route::post('/items', 'HomeController@store')->name('items.store');
Route::get('/items/{item}', 'HomeController@show')->name('items.show');
Route::get('/items/{item}/edit', 'HomeController@edit')->name('items.edit');
Route::post('/items/{item}', 'HomeController@update')->name('items.update');
Route::get('/items/{item}', 'HomeController@destroy')->name('items.destroy');
