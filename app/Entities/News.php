<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class News extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [];

    public function category(){
        return $this->belongsTo(NewsCat::class,'category_id','id');
    }
}