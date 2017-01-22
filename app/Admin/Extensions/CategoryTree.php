<?php

namespace App\Admin\Extensions;
use Encore\Admin\Form\Field\Select;

class CategoryTree extends Select
{
    protected $view = 'admin.fields.categoryTree';
    protected $elementClass = 'categoryTree';

    public function render()
    {
        return parent::render()->with(['options'=>$this->options]);
    }
}