<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function attribute()
    {
        return $this->hasMany(Attribute::class);
    }

    //store
    public static function storeExtendAttribute($request)
    {
        $product = static::find($request->input('product'));
        $res =$request->all();
        $a = '';
    }
}
