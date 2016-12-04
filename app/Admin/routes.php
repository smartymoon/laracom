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

    $router->post('exampleImage/{example}','ExampleController@doSaveImage')->name('saveExampleImage');
    $router->delete('exampleImage/{image}','ExampleController@delImage')->name('delExampleImage');

    $router->resource('example', ExampleController::class);
    $router->resource('appConfig', AppConfigController::class);
    $router->resource('message', MessageController::class);
    $router->resource('job', JobController::class);
});
