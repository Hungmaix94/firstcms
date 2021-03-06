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

Auth::routes();

Route::get('/', 'Auth\LoginController@showLoginForm');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/test', 'TestController@index');

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

//Emplyees
Route::resource('employees', 'EmployeeController');