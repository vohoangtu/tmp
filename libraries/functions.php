<?php
if(!function_exists("app")){
    function app($abstract = null, $params = null){
        $app = \Illuminate\Container\Container::getInstance();
        if($abstract){
            if($params){
                return $app->make($abstract,$params);
            }
            return $app->make($abstract);
        }
        return $app;
    }
}
if(!function_exists("config")){
    /**
     * @param $key
     * @param $default
     * @return Closure|mixed|object|null|array|boolean
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    function config($key = null, $default = null){
        $config = app("config");
        if(is_null($key)) return $config;
        return $config->has($key) ? $config->get($key) : $default;
    }
}

if(!function_exists("base_path")){
    function base_path($path = '')
    {
        return ROOT .($path ? DIRECTORY_SEPARATOR.$path : $path);
    }
}
