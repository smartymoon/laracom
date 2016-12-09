<?php

namespace  App\Repository;
use SmartyMoon\Repository\contract\Repository;
use App\Model\News;

class NewsRepository extends Repository
{

    public $model;

    public function __construct()
    {
        $this->model = new News();
        parent::__construct();
    }

    //all data action will be whiten here
    //永远不要在Controller 中写 JobRepository->model()
    /**
     * 获得某一分类，某一页面的数据
     * @param null $cat
     * @param int $page
     * @return
     */
    public function newsInCat($cat = null,$page = 15)
    {
        return $this->remember($this->tag.'_categories_'.$cat.'_page_'.$page,function() use ($cat,$page){
            return  $this->model->where('category_id',$cat)->orderBy('id','desc')->paginate($page);
        },'news');
    }

    public function allNews($page = 15)
    {
        return $this->remember($this->tag.'_allNews_page_'.$page,function() use ($page){
            return  $this->model->orderBy('id','desc')->paginate($page);
        },'news');
    }
}
