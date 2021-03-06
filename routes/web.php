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
Route::post('/reservation','ReservationController@reservation')->name('reservation.submit');

//AjaxRequest
Route::get('/findPegawai','ReservationController@findPegawai');
Route::get('/findService','ReservationController@findService');
Route::get('/findTime','ReservationController@findTime');

//Customer Auth
Auth::routes();


/**
 *  Admin Cabang
 */
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Auth\LoginController@login')->name('admin.login.submit');
    Route::post('logout', 'Auth\LoginController@logout')->name('admin.logout');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('register', 'Auth\RegisterController@register')->name('admin.register.submit');

    Route::get('home', 'HomeController@index')->name('admin.home');

    Route::get('reservation', 'ReservationController@index')->name('admin.reservation');
    Route::get('reservationConfirm/{id}', 'ReservationController@reservationConfirm');
    Route::get('pembayaran', 'PembayaranController@index')->name('admin.pembayaran');
    Route::get('pembayaranConfirm/{id}', 'PembayaranController@showConfirmForm');
    Route::post('pembayaranConfirm/{id}', 'PembayaranController@pembayaranConfirm')->name('admin.pembayaranConfirm.submit');
    Route::get('pelayanan', 'PelayananController@index')->name('admin.pelayanan');
    Route::post('pelayanan', 'PelayananController@pelayananSubmit')->name('admin.pelayanan.submit');

    //AjaxRequest
    Route::get('/findReservation','ReservationController@findReservation');
    Route::get('/findService','PelayananController@findService');
});


/**
 *  Admin Pusat
 */
Route::group(['prefix' => 'master', 'namespace' => 'Master'], function () {
    Route::get('/', 'Auth\LoginController@showLoginForm')->name('master.login');
    Route::post('login', 'Auth\LoginController@login')->name('master.login.submit');
    Route::post('logout', 'Auth\LoginController@logout')->name('master.logout');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('master.register');
    Route::post('register', 'Auth\RegisterController@register')->name('master.register.submit');

    Route::get('home', 'HomeController@index')->name('master.home');

    Route::get('pegawai/registerAdmin', 'PegawaiController@showRegisterAdmin')->name('master.registerAdmin');
    Route::post('pegawai/registerAdmin', 'PegawaiController@registerAdmin')->name('master.registerAdmin.submit');

    Route::get('pegawai/registerPegawai', 'PegawaiController@showRegisterPegawai')->name('master.registerPegawai');
    Route::post('pegawai/registerPegawai', 'PegawaiController@registerPegawai')->name('master.registerPegawai.submit');
    Route::get('pegawai', 'PegawaiController@index')->name('master.pegawai');

    Route::get('service/addService', 'ServiceController@addServiceShow')->name('master.addService');
    Route::post('service/addService', 'ServiceController@addService')->name('master.addService.submit');
    Route::get('service/addBundle', 'ServiceController@addBundleShow')->name('master.addBundle');
    Route::post('service/addBundle', 'ServiceController@addBundle')->name('master.addBundle.submit');
    Route::get('service/addBundleService/{id}', 'ServiceController@addBundleServiceShow')->name('master.addBundleService');
    Route::post('service/addBundleService/', 'ServiceController@addBundleService')->name('master.addBundleService.submit');
    Route::get('service', 'ServiceController@index')->name('master.service');

});



//MaterialX Template Example
Route::get('example', function () {
    return view('examplematerialx');
});
