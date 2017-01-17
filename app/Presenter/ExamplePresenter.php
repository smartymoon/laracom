<?php

/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2017/1/17
 * Time: 21:57
 */
namespace App\Presenter;
use Laracasts\Presenter\Presenter;

class ExamplePresenter extends Presenter
{
    public function images()
    {
        return collect(json_decode($this->pictures, true));
    }
}