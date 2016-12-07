<?php
namespace SmartyMoon\Repository\contract;

abstract class Repository implements RepositoryInterface
{
    public $SmartyCache;
    protected abstract function model();
    protected abstract function tag();

    function __construct()
    {
        $this->SmartyCache = app('SmartyCache',[
           'tag'       => $this->tag(),
           'cacheTime' => $this->cacheTime()
        ]);
    }

    public function cacheTime()
    {
        return 60;
    }
    public function count()
    {
        $count = $this->remember($this->tag() . '.count', function () {
            return $this->model()->count();
        });
        return $count;
    }
    public function all()
    {
        $all = $this->remember($this->tag() . '.all', function () {
            return $this->model()->all();
        });
        return $all;
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
