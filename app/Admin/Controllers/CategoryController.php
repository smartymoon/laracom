<?php

namespace App\Admin\Controllers;

use App\Model\Attribute;
use App\Model\Category;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Layout\Row;
use Encore\Admin\Tree;
use Encore\Admin\Widgets\Box;
use Illuminate\Http\Request;

//无限级分类
class CategoryController extends Controller
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
            $content->header('产品分类');
            $content->body(function (Row $row) {
                $row->column(6, Category::tree(function (Tree $tree) {
                        $tree->query(function($model){
                            return $model->with('attribute');
                        });
                        $tree->branch(function($branch){
                            $payload = $branch['title'] . '&nbsp;&nbsp;';
                            foreach($branch['attribute'] as $item)
                            {
                                $payload .= '<span class="label label-success">';
                                $payload .= $item['title'];
                                $payload .= '</span>&nbsp;';
                            }
                            return $payload;
                        });
                    }));
                $row->column(6, function (Column $column) {
                    $form = new \Encore\Admin\Widgets\Form();
                    $form->action(route('category.store'));
                    $form->select('parent_id', trans('admin::lang.parent_id'))->options(Category::selectOptions());
                    $form->text('title', trans('admin::lang.title'))->rules('required');
                    $form->multipleSelect('attribute','属性')->options(Attribute::all()->pluck('title','id'));
                    $form->number('order','排序')->default(0);
                    $column->append((new Box(trans('admin::lang.new'), $form))->style('success'));
                });
            });
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
        return Admin::grid(Category::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

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
        return Admin::form(Category::class, function (Form $form) {
            $form->select('parent_id', trans('admin::lang.parent_id'))->options(Category::selectOptions());
            $form->text('title', trans('admin::lang.title'))->rules('required');
            $form->multipleSelect('attribute','属性')->options(Attribute::all()->pluck('title','id'));
            $form->number('order','排序')->default(0);
        });
    }
}
