<?php

namespace SmartyMoon\Repository;

use SmartyMoon\Repository\cache\Cacheable;
use SmartyMoon\Repository\cache\NoCache;
use Illuminate\Support\ServiceProvider;
use SmartyMoon\Repository\command\RepositoryMakeCommand;

class RepositoryServerProvider extends ServiceProvider
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
        //
        $this->app->bind('SmartyCache',function($app, $parameters){
            if(env('CACHE_ENABLE') == true){
               return new Cacheable($parameters['tag'],$parameters['cacheTime']);
            }
            return new NoCache();
        });
        $this->commands(RepositoryMakeCommand::class);
    }
}
