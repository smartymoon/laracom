<?php

namespace App\Admin\Controllers;

use App\Admin\Nesteds\ProductCategoryRender;
use App\Model\ProductCategory;

use App\Repository\ProductCategoryRepository;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\Box;
use Illuminate\Http\Request;

//无限级分类
class ProductCategoryController extends Controller
{
    use ModelForm;
    /**
     * @var ProductCategoryRepository
     */
    private $productCategoryRepository;

    /**
     * @var ProductCategoryRender
     */
    public function __construct(ProductCategoryRepository $productCategoryRepository)
    {

        $this->productCategoryRepository = $productCategoryRepository;
    }

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {
            $content->header('产品分类');
            //$content->description('description');
            //无限级分类内容,Render Instance
            //get Data
            //render
            $content->body(function (Row $row) {

                $row->column(6, $this->productCategoryRepository->model->tree());
                $row->column(6, function (Column $column) {
                    $form = new \Encore\Admin\Widgets\Form();
                    $form->action(route('productCategory.store'));
                    $form->select('parent_id', trans('admin::lang.parent_id'))->options($this->productCategoryRepository->selectOptions());
                    $form->text('title', trans('admin::lang.title'))->rules('required');
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
        return Admin::grid(ProductCategory::class, function (Grid $grid) {

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
        return Admin::form(ProductCategory::class, function (Form $form) {
            $form->action(route('productCategory.store'));
            $form->select('parent_id', trans('admin::lang.parent_id'))->options($this->productCategoryRepository->selectOptions());
            $form->text('title', trans('admin::lang.title'))->rules('required');
            $form->number('order','排序')->default(0);
        });
    }
}
