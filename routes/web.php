<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('contact', function(){
    return view('contact');
})->name('contact');

Route::post('message','MessageController@store')->name('message');

Route::get('about', function(){
    return view('about');
})->name('about');


Route::get('join','JobController@index')->name('join');

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
Route::get('auth/geetest','Auth\AuthController@getGeetest');

Route::get('newsCat/{cat}',"NewsController@cat")->name('newsCat');
Route::get('news/{news}',"NewsController@news")->name('news');
