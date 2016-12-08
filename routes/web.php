<?php

//Route::get('/', function () {
//    return view('/frontend/home');
//});

# Auth
Auth::routes();

# Frontend
Route::get('/', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout')->name('logout');

# Admin
Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function () {

    # dashboard
    Route::get('/', 'DashboardController@index')->name('dashboard');

    # items
    Route::get('/items', 'ItemsController@index')->name('admin_items_list');
    Route::get('/items/create', 'ItemsController@create')->name('admin_items_create');
    Route::post('/items', 'ItemsController@store')->name('admin_items_store');
    Route::get('/items/{item}', 'ItemsController@show')->name('admin_items_show');
    Route::get('/items/{item}/edit', 'ItemsController@edit')->name('admin_items_edit');
    Route::put('/items/{item}', 'ItemsController@update')->name('admin_items_update');


});

