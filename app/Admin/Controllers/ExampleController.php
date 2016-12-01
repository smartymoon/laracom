<?php

namespace App\Admin\Controllers;

use App\Entities\Example;
use App\Entities\ExamplePic;

use App\Repositories\ExampleRepository;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Widgets\Box;

class ExampleController extends Controller
{
    use ModelForm;

    private $repository;

    public function __construct(ExampleRepository $repository)
    {
       $this->repository = $repository;
    }

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('案例');
            $content->description('你好吗');

            $content->body($this->grid());
        });
    }

    public function saveImages(Example $example)
    {
        //show Pics And change Pics
        return Admin::content(function(Content $content) use ($example){
            $content->header('案例图片');
            $content->body(new Box('管理图片', new \App\Admin\NormalPage('admin.multimage',$example)));
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');
            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return   Admin::grid(Example::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->name();
            $grid->description();
            $grid->created_at();
            $grid->updated_at();
            $grid->rows(function($row){
                $row->actions()->add(function ($row) {
                    return "<span  onclick='location.href=\"". route('exampleImageSave',['id'=>$row->id])."\"'><i class='fa fa-image'></i></span>";
                });
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Example::class, function (Form $form) {
            $form->display('id', 'ID');
            $form->text('name','案例名称');
            $form->textarea('description','案例描述');
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }

    protected function imageForm()
    {
        return Admin::form(Example::class, function (Form $form) {
            $form->php('id');
        });
    }

}
