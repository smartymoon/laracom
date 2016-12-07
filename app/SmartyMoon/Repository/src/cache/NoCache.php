<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2016/12/7
 * Time: 16:32
 */

namespace SmartyMoon\Repository\cache;
use SmartyMoon\Repository\contract\CacheInterface;
use Closure;


class NoCache  implements CacheInterface
{
    public function __construct($tag = null,$cacheTime = null)
    {
        $this->tag = $tag;
        $this->cacheTime = $cacheTime;
    }

    public function remember($key, Closure $entity, $tag = null)
    {
        /**
         * directly return
         */
        return $entity();
    }
    public function forget($key, $tag = null)
    {
        // Do Nothing
    }
    public function clearCache($tag = null)
    {
        // Do Nothing
    }
    public function clearAllCache()
    {
        // Do Nothing
    }
}