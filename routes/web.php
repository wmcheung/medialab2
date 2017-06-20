<?php
Route::group(['middleware'=>'guest', 'namespace'=>'Auth'], function() {
    Route::get('login', 'AuthController@login')->name('auth.login');
    Route::post('login', 'AuthController@loginPost')->name('auth.login');

    Route::get('register', 'AuthController@register')->name('auth.register');
    Route::post('register', 'AuthController@register')->name('auth.register');
});


Route::group(['middleware'=>'auth', 'namespace'=>'Dashboard', 'prefix'=>'dashboard'], function() {
    Route::get('/', 'DashboardController@index')->name('dashboard.index');
});