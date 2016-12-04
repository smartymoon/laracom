<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\AppConfigRepository;
use App\Entities\AppConfig;
use App\Validators\AppConfigValidator;

use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Traits\CacheableRepository;

/**
 * Class AppConfigRepositoryEloquent
 * @package namespace App\Repositories;
 */
class AppConfigRepositoryEloquent extends BaseRepository implements AppConfigRepository,CacheableInterface
{
    use CacheableRepository;
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return AppConfig::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
