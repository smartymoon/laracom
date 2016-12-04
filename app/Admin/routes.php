<?php

use Illuminate\Routing\Router;

Route::group([
    'prefix'        => config('admin.prefix'),
    'namespace'     => Admin::controllerNamespace(),
    'middleware'    => ['web', 'admin'],
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('users', UserController::class);
    $router->get('/example/{example}/image','ExampleController@saveImages')->name('exampleImageSave');
    $router->resource('example', ExampleController::class);
    $router->post('exampleImage/{example}','ExampleController@doSaveImage')->name('saveExampleImage');
    $router->delete('exampleImage/{image}','ExampleController@delImage')->name('delExampleImage');
});
