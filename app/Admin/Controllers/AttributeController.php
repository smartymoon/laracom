<?php

namespace App\Admin\Controllers;

use \App\Model\Attribute;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class AttributeController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('产品属性');

            $content->body($this->grid());
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

            $content->header('编辑产品属性');

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
            $content->header('新建产品属性');
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
        return Admin::grid(Attribute::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->column('title','标签')->editable();
            //TODO 转拼音
            $grid->column('name','字段名');
            $grid->type('类型')->value(function($type){
                    return '类型'.$type;
            });
            $grid->created_at();
            $grid->updated_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Attribute::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->category('title');
            $form->time('name');

            $form->select('type')->options([
                '100'=>'Select',
                '200'=>'Text',
                '300'=>'Number',
            ]);
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
