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

Route::get('/','NhapDLController@nhapDL');
Route::get('form', 'NhapDLController@xuat')->name('add');
Route::post('luu', 'NhapDLController@nhapDL')->name('nhap');
