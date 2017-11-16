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

Route::post('/logincheck','LoginController@validate_user');

Route::get('/profile','LoginController@user_info');
Route::get('/Registration','RegistrationController@index');
Route::post('/Reg_save','RegistrationController@insert_reg_data');

Route::get('/Logout','LoginController@logout');
