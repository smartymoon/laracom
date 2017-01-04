<?php

namespace  App\Repository;
use SmartyMoon\Repository\contract\Repository;
use App\Model\ProductCategory;

class ProductCategoryRepository extends Repository
{

    public $model;

    public function __construct()
    {
        $this->model = new ProductCategory();
        parent::__construct();
    }

    //all data action will be whiten here
    //永远不要在Controller 中写 JobRepository->model()
}
