<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages.home');
});
Route::group(['prefix' => 'admin'], function () {
    Route::post('users/create', function ()    {
        // Matches The "/admin/users" URL
    });
});

/*Route::get('admin', 'PagesController@admin');*/
/*Route::get('/', 'PagesController@index');
Route::get('admin', 'PagesController@admin');*/