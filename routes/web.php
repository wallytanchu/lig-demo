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

Route::get('/', 'HomeController@index');

Route::get('/single/{post}', 'HomeController@single');
Route::get('/archive', 'HomeController@archive');
Route::get('/admin-login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/admin-login', 'Auth\LoginController@login');
Route::get('/admin-list', 'AdminController@index')->name('admin-list');
Route::get('/admin-post', 'AdminController@form');
Route::post('/admin-post', 'AdminController@create')->name('post-create');
Route::get('/admin-post/edit/{post}', 'AdminController@edit');
Route::post('/admin-post/{post}', 'AdminController@update')->name('post-update');