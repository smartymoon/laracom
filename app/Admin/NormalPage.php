<?php
namespace App\Admin;
use Encore\Admin\Admin;
use Illuminate\Contracts\Support\Renderable;

class NormalPage implements renderable{

    private $view;
    private $data;

    protected $js = [
            '/packages/dropzone/dropzone.js',
    ] ;

    protected $css = [
        '/packages/dropzone/dropzone.css',
    ] ;

    public  function __construct($view,$data = [])
    {
        $this->view = $view;
        $this->data = $data;
        Admin::js($this->js);
        Admin::css($this->css);
    }

    public function render()
    {
        return view($this->view,['data'=>$this->data]);
    }
}