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


Route::get('solution',function(){
    return view('solution');
})->name('solution');

Route::post('message','MessageController@store')->name('message');

Route::get('about','AboutController@index')->name('about');

Route::get('join','JobController@index')->name('join');
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
Route::get('auth/geetest','Auth\AuthController@getGeetest');

Route::get('newsCat/{cat}',"NewsController@cat")->name('newsCat');
Route::get('allNews',"NewsController@cat")->name('allNews');

Route::get('news/{news}',"NewsController@news")->name('news');

Route::get('example',"ExampleController@index")->name('example');
Route::get('product/{id}',"ProductController@index")->name('product');
