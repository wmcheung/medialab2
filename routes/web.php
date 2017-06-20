<?php
Route::group(['middleware'=>'guest', 'namespace'=>'Auth'], function() {
    # Login
    Route::get('login', 'AuthController@login')->name('auth.login');
    Route::post('login', 'AuthController@loginPost')->name('auth.login');

    # Register
    Route::get('register', 'AuthController@register')->name('auth.register');
    Route::post('register', 'AuthController@registerPost')->name('auth.register');

});
Route::group(['middleware'=>'auth'], function() {
    Route::get('logout', 'Auth\AuthController@logout')->name('auth.logout');
});

Route::group(['middleware'=>'auth', 'namespace'=>'Dashboard', 'prefix'=>'dashboard'], function() {
    Route::get('/', 'DashboardController@index')->name('dashboard.index');

    # Logout
});