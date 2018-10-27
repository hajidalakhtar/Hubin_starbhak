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
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();



// Admin
Route::get('/admin/login' ,'AdminLoginController@ShowAdminLogin');
Route::get('/admin/home' ,'AdminLoginController@adminhome')->middleware('auth:admin');
Route::post('/admin/login/submit', 'AdminLoginController@adminlogin')->name('admin.login');
Route::get('/admin/logout', 'AdminLoginController@logout')->name('admin.logout');

// Kunjungan_Industri
Route::get('/form_kunjin','Kunjungan_Industri@ShowFormKunjin')->name('form_kunjin');
Route::post('/prosesaddkunjin','Kunjungan_Industri@prosesadd')->name('ProsesAddKunjin');
