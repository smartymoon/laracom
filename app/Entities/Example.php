<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Example extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [];

    public function images()
    {
        return $this->hasMany(ExamplePic::class);
    }


}
