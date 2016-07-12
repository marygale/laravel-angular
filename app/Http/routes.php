<?php

Route::get('/', 'HomepageController@index');

/** Login **/
Route::get('auth/login', 'Auth\AuthController@showLoginForm');
Route::post('auth/login', 'Auth\AuthController@login');

/** Registration Routes **/
Route::get('admin/user/create', 'UserController@create');
Route::post('auth/register', 'Auth\AuthController@register');

Route::get('admin/user/all', 'UserController@user_list');
