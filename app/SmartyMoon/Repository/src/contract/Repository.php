<?php
namespace SmartyMoon\Repository\contract;
use \Closure;


abstract class Repository implements RepositoryInterface
{
    public $SmartyCache;
    public $cacheTime = 60;
    public $tag;

    function __construct()
    {
        $this->tag   = get_class($this->model);
        $this->SmartyCache = app('SmartyCache',[
           'tag'       => $this->tag,
           'cacheTime' => $this->cacheTime
        ]);
    }

    public function count()
    {
        $count = $this->remember($this->tag . '.count', function () {
            return $this->model->count();
        });
        return $count;
    }

    public function all()
    {
        $all = $this->remember($this->tag . '.all', function () {
            return $this->model->all();
        });
        return $all;
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function remember($key, Closure $entity, $tag = null)
    {
        return $this->SmartyCache->remember($key, $entity, $tag);
    }
    public function forget($key, $tag = null)
    {
        $this->SmartyCache->forget($key, $tag);
    }
    public function clearCache($tag = null)
    {
        $this->SmartyCache->clearCache($tag);
    }
    public function clearAllCache()
    {
        $this->SmartyCache->clearAllCache();
    }
}
