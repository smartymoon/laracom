<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;

class Category extends Model
{
    use ModelTree, AdminBuilder;
    public function attribute()
    {
        return $this->belongsToMany(Attribute::class);
    }

    public static function selectOptionsForProduct()
    {
        $options = (new static())->buildSelectOptionsForProduct();

        return collect($options)->prepend(['value'=>'根','disabled'=>true], 0)->all();
    }
    //
    protected function buildSelectOptionsForProduct(array $nodes = [], $parentId = 0, $prefix = '')
    {
        $prefix = $prefix ?: str_repeat('&nbsp;', 6);

        $options = [];

        if (empty($nodes)) {
            $nodes = $this->allNodes();
        }

        foreach ($nodes as $node) {
            $node[$this->titleColumn] = $prefix.'&nbsp;'.$node[$this->titleColumn];
            if ($node[$this->parentColumn] == $parentId) {
                $children = $this->buildSelectOptionsForProduct($nodes, $node[$this->getKeyName()], $prefix.$prefix);


                if ($children) {
                    $options[$node[$this->getKeyName()]] = ['value'=>$node[$this->titleColumn],'disabled'=>true];
                    $options += $children;
                }else{
                    $options[$node[$this->getKeyName()]] = ['value'=>$node[$this->titleColumn],'disabled'=>false];
                }
            }
        }

        return $options;
    }
}
