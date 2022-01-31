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

Route::get('/', 'PagesController@index')->name('dashboard');
Route::get('/login', 'PagesController@login')->name('login');
Route::get('/food', 'PagesController@orderPage');
Route::post('/loginForm', 'UserController@login');
Route::post('/userForm', 'AdminController@createUser');
Route::post('/changeStatusForm', 'FoodController@changeStatus');
Route::get('/food-orders', 'FoodController@orders');

