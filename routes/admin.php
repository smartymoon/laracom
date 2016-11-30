<?php
Route::group(['prefix' => 'admin'], function() {
    Route::get('login', 'AuthController@login')->name('adminLogin');
    Route::get('logout', 'AuthController@logout')->name('adminLogout');
    Route::group(['middleware' => 'Admin'], function(){

    });
});

