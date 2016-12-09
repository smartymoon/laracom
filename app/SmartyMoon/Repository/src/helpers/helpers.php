<?php
if(!function_exists('appConfig')){
    /**
     * 返回数据库配置
     * @param $key
     * @param string $default
     * @return string
     */
    function appConfig($key, $default = '')
    {
            return SmartyConfig::get($key,$default);
    }
}