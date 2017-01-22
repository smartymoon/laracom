<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2017/1/19
 * Time: 13:10
 */

namespace App\Admin\Service;


use App\Model\Category;

class DynamicAttribute
{

    static protected $fieldTypes= [
            'text'=>"短文本",
            'textarea'=>"段落",
            'number'=>"整数",
            'decimal'=>"小数",
            'mobile'=>"电话",
            'currency'=>'货币',
            'date'=>'日期',
            'dateRange'=>"日期范围",
            'year'=>'年',
            'month'=>'月份',
            'switch'=>"开关",
            'radio'=>"单选",
            'select'=>"下拉菜单",
            'multipleSelect'=>"多选",
            'tags'=>"逗号标签",
            'email'=>'邮箱',
            'url'=>'网址',
    ];
    /*
     * Get build in Fields
     */
    public static function getFieldTypes()
    {
        return static::$fieldTypes;
    }

    public static function getFieldName($type)
    {
       return static::$fieldTypes[$type];
    }

    public static function getRootOptions($model)
    {
            return static::getOptionsByParent(0,$model);
    }

    public static function getOptionsByParent($parent_id = 0,$model)
    {
        if($options = $model->select('id','title')->where('parent_id',$parent_id)->get()->pluck('title','id')->toArray())
        {
            return [0=>'未选择'] + $options;
        }
        return [];
    }

    public static function getFieldsByCategory($category)
    {
        return  $category->attribute()->get();
    }
}
