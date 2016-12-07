<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Example extends Model
{

    protected $fillable = [];

    public function images()
    {
        return $this->hasMany(ExamplePic::class);
    }


}
