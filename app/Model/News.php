<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    protected $fillable = [];

    public function category(){
        return $this->belongsTo(NewsCat::class,'category_id','id');
    }

    public function getAbcAttribute()
    {
       return 'shit';
    }
}