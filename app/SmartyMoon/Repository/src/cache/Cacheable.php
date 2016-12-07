<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2016/12/7
 * Time: 16:31
 */

namespace SmartyMoon\Repository\cache;

use SmartyMoon\Repository\contract\CacheInterface;
use \Closure;
use Cache;

class Cacheable implements CacheInterface
{
    public $tag;
    public $cacheTime;

    public function __construct($tag,$cacheTime)
    {
        $this->tag = $tag;
        $this->cacheTime = $cacheTime;
    }

    public function remember($key, Closure $entity, $tag = null)
    {
        return Cache::tags($tag == null ? $this->tag : $tag)->remember($key, $this->cacheTime, $entity);
    }
    public function forget($key, $tag = null)
    {
        Cache::tags($tag == null ? $this->tag : $tag)->forget($key);
    }
    public function clearCache($tag = null)
    {
        Cache::tags($tag == null ? $this->tag : $tag)->flush();
    }
    public function clearAllCache()
    {
        Cache::flush();
    }
}