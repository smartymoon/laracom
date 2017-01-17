<?php

namespace App\Admin\Controllers;

use App\Model\Example;

use App\Model\ExamplePic;

use App\Http\Requests\ExampleImageCreate;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Grid\Displayers\Actions;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Widgets\Box;
use Storage;

class ExampleController extends Controller
{
    use ModelForm;


    public function __construct()
    {

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
            $content->body($this->grid());
        });
    }

    public function saveImages(Example $example)
    {
        //show Pics And change Pics
        return Admin::content(function(Content $content) use ($example){
            $content->header('案例图片');
            $content->body(view('admin.multimage',compact('example')));
        });
    }

    public function doSaveImage(Example $example,ExampleImageCreate $request)
    {
       $url = $request->file('file')->store('/');
       if($url == 0)
       {
          return response('失败','400');
       }
       $example->images()->save(new ExamplePic(['url'=>$url]));
    }

    public function delImage(ExamplePic $image)
    {
      if($image->delete())
      {
         Storage::delete($image->url);
         return 'ok';
      }else{
         return 'fail';
      }
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
            $grid->name()->editable();
            $grid->description();
            $grid->created_at();
            $grid->updated_at();
            $grid->actions(function(Actions $action){
                    $action->prepend("<a  href='".route('exampleImageSave',['id'=>$action->getkey()])."' ><i class='fa fa-image'></i></a>");
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
