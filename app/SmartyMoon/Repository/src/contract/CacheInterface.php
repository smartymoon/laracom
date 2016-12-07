<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2016/12/7
 * Time: 16:34
 */

namespace SmartyMoon\Repository\contract;
use Closure;



interface CacheInterface
{
    public function remember($key, Closure $entity, $tag = null);
    public function forget($key, $tag = null);
    public function clearCache($tag = null);
    public function clearAllCache();
}