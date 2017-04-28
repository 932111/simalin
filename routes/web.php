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
})->middleware('guest')->name('welcome');

//Auth::routes();

Route::post('login', 'Auth\LoginController@login');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

Route::get('register', 'Auth\RegisterController@showFormPendaftaran')->name('register');

Route::post('register', 'Auth\RegisterController@register');


Route::get('/home', 'HomeController@index')->name('dashboard');
Route::POST('/tracking', 'HomeController@tracking')->name('track.cek');

Route::prefix('admin')->group(function(){
    Route::get('/masuk','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::POST('/masuk','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/','AdminController@index')->name('admin.dashboard');
    Route::get('/{gangguan}', 'AdminController@show')->name('detail.laporan');
    Route::get('/pdf/formulir-tindak-lanjut/{gangguan}', 'PDFDetilLaporanController@formulirTindakLanjutPDF')->name('pdf.formulir.laporan');
    Route::get('/pdf/surat-tugas/{gangguan}', 'PDFDetilLaporanController@suratTugasPDF')->name('pdf.surat.laporan');
    Route::POST('/penanganan/offline/', 'AdminController@offlineStore')->name('penanganan.offline.simpan');
    Route::POST('/penanganan/online/', 'AdminController@onlineStore')->name('penanganan.online.simpan');
    Route::get('/penanganan/offline/{gangguan}', 'AdminController@offline')->name('penanganan.offline.view');
    Route::get('/penanganan/online/{gangguan}', 'AdminController@online')->name('penanganan.online.view');
    Route::POST('/petugas-gangguan', 'AdminController@petugasGangguan')->name('petugas.gangguan');
    Route::get('/berkas/{gangguan}', 'AdminController@berkas')->name('berkas.gangguan');
    Route::get('/update/{gangguan}', 'AdminController@updateGangguan')->name('update.gangguan');
    Route::post('/update/', 'AdminController@simpanHasil')->name('update.simpan');
    Route::post('/tracking/', 'AdminController@tracking')->name('admin.track');


});

Route::get('/lapor', 'GangguanController@create')->name('lapor.create');

Route::get('/data-jar', 'GangguanController@dataJar');

Route::get('/data-app', 'GangguanController@dataApp');

Route::POST('/lapor', 'GangguanController@store')->name('lapor.submit');




