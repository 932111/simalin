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
})->middleware('guest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('dashboard');

Route::POST('/home', 'HomeController@index')->name('track.cek');


Route::prefix('admin')->group(function(){
    Route::get('/masuk','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::POST('/masuk','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/','AdminController@index')->name('admin.dashboard');

});

Route::get('/lapor', 'GangguanController@create')->name('lapor.create');

Route::get('/data-jar', 'GangguanController@dataJar');

Route::get('/data-app', 'GangguanController@dataApp');

Route::POST('/lapor', 'GangguanController@store')->name('lapor.submit');


