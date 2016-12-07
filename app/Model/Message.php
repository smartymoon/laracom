<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['name','image','content','tel','email'];
}
