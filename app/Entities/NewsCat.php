<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class NewsCat extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [];


    public function news()
    {
        return $this->hasMany(News::class,'id','category_id');
    }
}
