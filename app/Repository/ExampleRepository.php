<?php

/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2016/12/7
 * Time: 15:35
 */

namespace  App\Repository;
use SmartyMoon\Repository\Repository;
use App\Model\Example;

class ExampleRepository extends  Repository
{
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    protected function model()
    {
        return app(Example::class);
    }
    //all data action will be whiten here
    //永远不要在Controller 中写 JobRepository->model()

}