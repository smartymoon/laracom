<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2017/1/19
 * Time: 13:10
 */

namespace App\Admin\Service;

use Admin;
use Encore\Admin\Form;

class DynamicAttribute
{
    /*
     * Get build in Fields
     */
    public function getFields()
    {
        Admin::init();
        dump(Form::$availableFields);
    }

    public static function getRootOptions()
    {
        return [
            1=>'mmm',
            3=>'mmm',
            4=>'mmm',
            6=>'mmm',
        ];
    }

}