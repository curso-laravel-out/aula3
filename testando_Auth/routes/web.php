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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/teste/home', 'TesteController@home');

Route::get('/teste/{nome?}', 'TesteController@index');

Route::get('/info', 'TesteController@info');

Route::get('/boa-tarde/{nome?}', 'TesteController@boaTarde');

Route::get('/single-controller', 'ForeverAloneController');

Route::resource('/party', 'PartyGuyController');