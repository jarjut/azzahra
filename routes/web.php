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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/service','ServiceController@index')->name('service');
Route::get('/bundle','BundleController@index')->name('bundle');
Route::get('/reservation','ReservationController@index')->name('reservation');

//AjaxRequest
Route::get('/findPegawai','ReservationController@findPegawai');
Route::get('/findService','ReservationController@findService');
Route::get('/findTime','ReservationController@findTime');

//Customer Auth
Auth::routes();


//Admin
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Auth\LoginController@login')->name('admin.login.submit');
    Route::post('logout', 'Auth\LoginController@logout')->name('admin.logout');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('register', 'Auth\RegisterController@register')->name('admin.register.submit');
    Route::get('home', 'HomeController@index')->name('admin.home');
});



//MaterialX Template Example
Route::get('example', function () {
    return view('examplematerialx');
});
