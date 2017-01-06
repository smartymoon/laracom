<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2017/1/5
 * Time: 18:11
 */

namespace App\Admin\Nesteds;


use App\Repository\ProductCategoryRepository;
use Illuminate\Cache\Repository;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class ProductCategoryRender implements Renderable
{
    /*
     *  获取用于option 展示用的嵌套树
     */
    /**
     * @var ProductCategoryRepository
     */
    private $productCategoryRepository;
    private $optionsArray = [];

    public function __construct(ProductCategoryRepository $productCategoryRepository)
    {
        $this->productCategoryRepository = $productCategoryRepository;
    }

    public function create(Request $request)
    {
       $this->productCategoryRepository->create($request);
    }

    public  function getSelectOptions()
    {
         $root = [0=>'根节点'];
         $this->makeOptionsArray(
             $this->productCategoryRepository->all()->toHierarchy()
        );
        return  $root + $this->optionsArray;
    }

    protected function makeOptionsArray($tree)
    {
        foreach ($tree as $branch)
        {
           $this->optionsArray[$branch->id] = str_repeat('&nbsp;',$branch->depth*4) . $branch->name;
           if(!$branch->children->isEmpty())
           {
              $this->makeOptionsArray($branch->children);
           }
        }
    }

    /**
     * Get the evaluated contents of the object.
     *
     * @return string
     */
    public function render()
    {
        //get nesteds data

        //draw blade.php

        //write other functions
        return view('admin.nesteds.productCategory')->render();
    }
}