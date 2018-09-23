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
    return view('login');
});

Route::get('dashboard', function () {
    return view('admin.dashboard');
});


Route::group(['prefix' => 'admin/servicios'], function() {
    Route::get('index', 'ServiciosController@index');
    Route::get('accounts', 'AccountController@index');
});