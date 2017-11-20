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
//login
Route::post('/logincheck','LoginController@validate_user');

//progile
//Route::get('/profile/{name}','UserController@index');
Route::get('/profile','UserController@index');
Route::get('/profile_edit','UserController@edit_profile');
Route::post('/profile_edit_done','UserController@update_edit_profile');
Route::get('/change_password','UserController@user_pass');
Route::post('/password_changed','UserController@update_user_pass');
//registration
Route::get('/Registration','RegistrationController@index');
Route::post('/Reg_save','RegistrationController@insert_reg_data');

//category add, edit, deleteadd_sub_category
Route::get('/category/{category_id}','CategoryController@cat_get');
Route::get('/add_category','CategoryController@add_category');
Route::post('/edit_category','CategoryController@edit_category');
Route::post('/delete_category','CategoryController@delete_category');

Route::get('/update_category','CategoryController@update_category');


//Sub category add, edit, delete
Route::get('/add_sub_category_modal','SubCategoryController@get_sub_cat_modal');
Route::get('/sub_category/{sub_category_id}','SubCategoryController@get_sub_category');
Route::post('/add_sub_category','SubCategoryController@add_sub_category');

//logout
Route::get('/Logout','LoginController@logout');
