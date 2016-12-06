<?php

//Route::get('/', function () {
//    return view('/frontend/home');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout')->name('logout');

Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function () {

    # dashboard
    Route::get('/', 'DashboardController@index')->name('dashboard');

    # items
    Route::get('/items', 'ItemsController@index')->name('admin_items_list');

});

