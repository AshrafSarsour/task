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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['middleware'=> 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/unicorn', 'UnicornController@index')->name('unicorn');
    Route::get('/unicorn/add', 'UnicornController@add')->name('unicorn@add');
    Route::post('/unicorn/store', 'UnicornController@store')->name('unicorn@store');
    Route::get('/unicorn/edit/{id}', 'UnicornController@edit')->name('unicorn@edit');
    Route::post('/unicorn/update/{id}', 'UnicornController@update')->name('unicorn@update');
    Route::get('/unicorn/delete/{id}', 'UnicornController@delete')->name('unicorn@delete');
});
