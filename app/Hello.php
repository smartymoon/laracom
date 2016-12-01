<?php
namespace App;
use Illuminate\Contracts\Support\Renderable;

class Hello implements Renderable
{
    private $data;

    public function __construct($data = '')
    {
      $this->data = 'fuck your sister';
    }

    public function render(){
        $data = $this->data;
        return view('admin.hello',compact('data'));
    }
}