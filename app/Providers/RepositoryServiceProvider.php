<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\AdminUserRepository::class, \App\Repositories\AdminUserRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CaseRepository::class, \App\Repositories\CaseRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CasePicRepository::class, \App\Repositories\CasePicRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ExampleRepository::class, \App\Repositories\ExampleRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ExamplePicRepository::class, \App\Repositories\ExamplePicRepositoryEloquent::class);
        //:end-bindings:
    }
}
