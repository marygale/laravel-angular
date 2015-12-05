<?php

Route::get('/', function () {
    return view('pages.home');
});
Route::group(['prefix' => 'admin'], function () {
    /*Route::post('users/create', function ()    {
        // Matches The "/admin/users" URL
        return view('admin.new');
    });*/
    Route::get('users/create', 'UserController@create');
});
Route::get('users/create', 'UserController@create');


