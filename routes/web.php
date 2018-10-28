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
Route::get('/admin/list-kunjin' ,'Kunjungan_Industri@read')->middleware('auth:admin')->name('ListKunjin');

Route::get('/admin/home' ,'AdminLoginController@adminhome')->middleware('auth:admin')->name('admin.home');
Route::post('/admin/login/submit', 'AdminLoginController@adminlogin')->name('admin.login');
Route::get('/admin/logout', 'AdminLoginController@logout')->name('admin.logout');

// Kunjungan_Industri
Route::get('/kunjin/detaildata/{id}','Kunjungan_Industri@DetailData')->name('Kunjin.DetailData')->middleware('auth:admin');
Route::get('/kunjin/edit/{id}','Kunjungan_Industri@edit')->name('Kunjin.edit')->middleware('auth:admin');
Route::get('/kunjin/delete/{id}','Kunjungan_Industri@Delete')->name('Kunjin.Delete')->middleware('auth:admin');
Route::get('/kunjin/AddStatusUser/{id}','Kunjungan_Industri@AddStatusUser')->name('Kunjin.AddStatusUser');
Route::get('/form_kunjin','Kunjungan_Industri@ShowFormKunjin')->name('form_kunjin');
Route::post('/prosesaddkunjin','Kunjungan_Industri@prosesadd')->name('Kunjin.ProsesAdd');
