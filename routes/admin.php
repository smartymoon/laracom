<?php
Route::group(['prefix' => 'admin'], function() {
    Route::get('login', 'AuthController@login')->name('adminLogin');
    Route::get('logout', 'AuthController@logout')->name('adminLogout');
    Route::group(['middleware' => 'admin'], function(){
        Route::resource('adminUser','AdminUsersController');
    });
});

