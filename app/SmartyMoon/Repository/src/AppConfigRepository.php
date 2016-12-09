<?php

namespace  SmartyMoon\Repository;
use SmartyMoon\Repository\contract\Repository;
use App\Model\AppConfig;
//  AppConfig make a database

class AppConfigRepository extends Repository
{

    public $model;

    public function __construct()
    {
        $this->model = new AppConfig();
        parent::__construct();
    }

    //all data action will be whiten here
    //永远不要在Controller 中写 JobRepository->model()

    public function get($key,$default = '')
    {
       $value = $this->remember($this->tag.'_'.$key,function() use($key) {
            return $this->model->where('key',$key)->value('value');
       },'AppConfig');
       return $value?$value:$default;
    }
}
