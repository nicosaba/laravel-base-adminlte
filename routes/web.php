<?php

Route::get('/', 'HomeController@home')->middleware('RolMiddleware')->name('home');

// LOGIN
Route::get('/login','LoginController@login')->name('login');
Route::post('/login','LoginController@postLogin')->name('login.postLogin');
Route::get('/logout','LoginController@logOut')->name('logout');

