<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ExamplePicRepository;
use App\Entities\ExamplePic;
use App\Validators\ExamplePicValidator;

/**
 * Class ExamplePicRepositoryEloquent
 * @package namespace App\Repositories;
 */
class ExamplePicRepositoryEloquent extends BaseRepository implements ExamplePicRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ExamplePic::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return ExamplePicValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
