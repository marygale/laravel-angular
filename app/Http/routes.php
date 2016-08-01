<?php

Route::get('/', 'HomepageController@index');

Route::get('/dashboard', 'DashboardController@dashboard');

/** Login **/
Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');

Route::get('auth/logout', 'Auth\AuthController@logout');

/** Registration Routes **/
Route::get('register', 'GuestController@create_first');
Route::post('auth/register', 'Auth\AuthController@register');

/** Create User */
Route::get('admin/user/create', 'UserController@user_create');
Route::post('admin/user/create', 'UserController@post_create');

Route::get('admin/user/all', 'UserController@user_list');

/** Edit User */
Route::get('admin/user/{user}/edit', 'UserController@user_edit');
Route::post('admin/user/{user}/edit', 'UserController@post_user_edit');
