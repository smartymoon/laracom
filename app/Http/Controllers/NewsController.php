<?php

namespace App\Http\Controllers;

use App\Entities\NewsCat;
use App\Repositories\NewsCatRepository;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function cat(NewsCatRepository $cat)
    {
       dd($cat->model->news());
    }
}
