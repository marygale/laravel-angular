<?php

Route::get('/', 'HomepageController@index');

Route::get('/dashboard', 'DashboardController@dashboard');

/** Login **/
Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');

Route::get('auth/logout', 'Auth\AuthController@logout');

/** Registration Routes **/
Route::get('admin/user/create', 'UserController@create');
Route::get('register', 'GuestController@create_first');
Route::post('auth/register', 'Auth\AuthController@register');

Route::get('admin/user/all', 'UserController@user_list');
