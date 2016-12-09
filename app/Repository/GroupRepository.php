<?php

namespace  App\Repository;
use SmartyMoon\Repository\contract\Repository;
use App\Model\Group;

class GroupRepository extends Repository
{

    public $model;

    public function __construct()
    {
        $this->model = new Group();
        parent::__construct();
    }

    //all data action will be whiten here
    //永远不要在Controller 中写 JobRepository->model()
}
