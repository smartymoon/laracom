<?php

namespace  App\Repository;

use Illuminate\Http\Request;
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
    public function selectOptions()
    {
       return $this->model->selectOptions();
    }
    //all data action will be whiten here
    //永远不要在Controller 中写 JobRepository->model()

    public function create(Request $request)
    {
        if($request->parent_id == 0)
        {
           $this->model->create(['name'=>$request->name]);
        }else{
            $parent = $this->model->findOrfail($request->parent_id);
            $parent->children()->create(['name'=>$request->name]);
        }
    }
}
