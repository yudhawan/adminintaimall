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
Auth::routes(['register'=>false, 'reset'=>false, 'verify'=>false]);
Route::get('/', function ()
{
	return redirect('/dasboard');
});
Route::get('/dasboard', 'Admin@index');
Route::get('/data/{month?}', 'Admin@data');
Route::get('/aproduct', 'Admin@product');
Route::get('/product_out', 'Admin@product_out');
Route::get('/aorder','Admin@order');
Route::get('/add_product', 'Admin@add_product');
Route::get('/aedit_product/{id}', 'Admin@edit_product');
Route::get('/delete/{id}/{table}', 'Admin@delete');
Route::get('/acategory', 'Admin@category');
Route::get('/avoucher', 'Admin@voucher');
Route::get('/adiscount', 'Admin@discount');
Route::get('/avoucher', 'Admin@voucher');
Route::get('/ainbox', 'Admin@inbox');
Route::get('/sub/{id}', 'Admin@sub');
Route::get('proccess_order/{id}', 'Admin@proccess_order');
Route::get('coba', 'Admin@coba');

Route::post('/tambah', 'Admin@tambah');
Route::post('/update_cat', 'Admin@update_cat');
Route::post('/update_brand', 'Admin@update_brand');
Route::post('/update_pro', 'Admin@update_pro');
Route::post('/update_disc', 'Admin@update_disc');
Route::post('/add_category', 'Admin@add_category');
Route::post('/add_sub_cat', 'Admin@add_sub_cat');
Route::post('/add_voucher', 'Admin@add_voucher');
Route::post('/add_discount', 'Admin@add_discount');

Route::get('/administratorim', 'Adminauth@showlogin');
Route::post('/admnlgn', 'Adminauth@login')->name('masuk');
Route::get('logout', 'Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
