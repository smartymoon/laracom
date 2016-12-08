<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class NewsCat extends Model
{
    protected $fillable = [];


    public function news()
    {
        return $this->hasMany(News::class,'category_id','id');
    }
}
