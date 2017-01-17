<?php

/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2016/12/7
 * Time: 15:35
 */

namespace  App\Repository;
use SmartyMoon\Repository\contract\Repository;
use App\Model\Example;

class ExampleRepository extends  Repository
{
    public $model;

    public function __construct()
    {
        $this->model = new Example();
        parent::__construct();
    }
    //all data action will be whiten here
    //永远不要在Controller 中写 JobRepository->model()

    public function exampleWithImages()
    {
        return $this->remember($this->tag.'_exampleWithImages',function(){
            return $this->model->get();
        },'Example');
    }
}