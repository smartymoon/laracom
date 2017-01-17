<?php

namespace App\Model;

use App\Presenter\ExamplePresenter;
use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;

class Example extends Model
{

    use PresentableTrait;

    protected $fillable = [];
    protected $presenter = ExamplePresenter::class;
}
