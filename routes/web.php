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


Route::get('/login', 'LoginController@showlogin')->name('show.login');
Route::post('/login', 'LoginController@login')->name('user.login');
Route::post('/blog', 'LoginController@showBlog')->name('show.blog');
