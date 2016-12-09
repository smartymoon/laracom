<?php namespace SmartyMoon\Repository;

use Illuminate\Support\Facades\Facade;

class SmartyConfig extends Facade
{
    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'SmartyConfig';
    }

}
