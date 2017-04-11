<?php

//Route::get('/', function () {
//    return view('/frontend/home');
//});

# Auth
//Auth::routes();

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');

# Frontend
Route::get('/', 'FrontendController@index')->name('home');
Route::get('/klime', 'FrontendController@klime')->name('klime');
Route::get('/kontakt', 'FrontendController@kontakt')->name('kontakt');
Route::get('/o_nama', 'FrontendController@o_nama')->name('o_nama');

# Admin
Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function () {

    # dashboard
    Route::get('/', 'DashboardController@index')->name('dashboard');

    # items
    Route::get('/items', 'ItemsController@index')->name('admin_items_list');
    Route::get('/items/create', 'ItemsController@create')->name('admin_items_create');
    Route::post('/items', 'ItemsController@store')->name('admin_items_store');
    Route::get('/items/{item}/edit', 'ItemsController@edit')->name('admin_items_edit');
    Route::patch('/items/{item}', 'ItemsController@update')->name('admin_items_update');
    Route::delete('/items/{item}', 'ItemsController@destroy')->name('admin_items_destroy');

});

Route::get('/logout', 'Admin\DashboardController@logout')->name('logout');
