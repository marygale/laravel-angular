<?php

/*Route::get('/', function () {
    return view('pages.home');
});*/

Route::get('/', 'HomepageController@index');

//Registration Routes
Route::get('admin/user/create', 'UserController@create');
Route::post('auth/register', 'Auth\AuthController@register');
//Route::post('admin/user/create', 'UserController@post_create');


