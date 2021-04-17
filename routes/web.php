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


Route::get('/', 'Auth\LoginController@login')->name('home');
Auth::routes();
Route::group(['middleware' => ['web','auth.user'],'namespace'=>'user','prefix'=>'user'], function() {

    Route::get('/panel', 'PanelController@index')->name('panel');
    Route::resource('task','TaskController');

});
Route::group(['middleware' => ['web','auth.admin'],'namespace'=>'admin','prefix'=>'admin'], function() {

    Route::get('/report', 'ReportTaskController@index')->name('report');
    Route::get('', 'AdminController@index')->name('dashboard');

});
