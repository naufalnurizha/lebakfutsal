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

Route::get('/', 'dashboardController@index')->name('dashboard');

Auth::routes();

Route::get('/dashboard', 'dashboardController@index')->name('dashboard');



Route::get('/booking', 'bookingController@index')->name('booking');
Route::post('/booking/add', 'bookingController@addEvent')->name('tambah');


Route::group(['middleware' => 'admin'], function(){
	Route::get('/laporan/{id}', 'laporancontroller@destroy');

Route::get('/laporan', 'laporancontroller@index')->name('laporan');

Route::post('/laporan/pdf','laporancontroller@fun_pdf')->name('pdf');
});



	


Route::get('/carabooking', 'carabookingcontroller@index')->name('carabooking');
Route::get('/home', 'HomeController@index')->name('home');
