<?php

namespace App\Admin\Controllers;

use App\Admin\Service\DynamicAttribute;
use App\Model\Category;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use App\Model\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use ModelForm;

    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->grid());
        });
    }

    public function getNextLevelCategory($parent = 0)
    {
        return DynamicAttribute::getOptionsByParent($parent,new Category);
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
        return Admin::grid(Product::class, function (Grid $grid) {
            $grid->id('ID')->sortable();
            $grid->name('产品名称')->editable();
            $grid->cover('图片')->image();
            $grid->category()->title('分类');
            $grid->created_at();
            $grid->updated_at();
            $grid->actions(function($action){
                    $action->prepend("<a href='". route('showExtendAttribute',['product'=>$action->getkey()]) ."'>属性设置</a>");
            });
        });
    }


    public function extendAttribute(Product $product)
    {
        return Admin::content(function (Content $content) use($product){
            $content->header('拓展属性');
            $content->description('');
            $content->body($this->extendAttributeForm($product));
        });
    }

    protected function extendAttributeForm(Product $product)
    {
        $fields = DynamicAttribute::getFieldsByCategory($product->category);
        return Admin::form(Product::class,function(Form $form) use ($product,$fields){
            $form->hidden('product')->default($product->id);

            $fields->each(function($item) use($form){
                call_user_func_array([$form,$item['type']],['attribute_'.$item['id'],$item['title']]);
            });
        });
    }

    public function extendAttributeStore(Request $request)
    {
        $res = Product::storeExtendAttribute($request);
        //返回成功，OR 失败
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Product::class, function (Form $form) {
            $form->tab('基本信息',function($form){
                $form->display('id', 'ID');
                $form->text('name','产品名称');
                $form->image('cover','产品图片');
                $form->categoryTree('category_id','产品分类')->options(Category::selectOptionsForProduct());
                $form->editor('description','产品描述')->default('');
                $form->display('created_at');
                $form->display('updated_at');
            })->tab('拓展信息',function ($form){
                //随着category 变而变

            });
        });
    }
}
