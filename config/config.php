<?php
if (!function_exists('root_path')){
    function root_path($path='')
    {
        $path=trim($path,'/');
        return dirname(dirname(__FILE__)). '/' .$path;
    }
}

if (!function_exists('base_url')){
    function base_url($uri=''){
        $path=trim($uri, '/');
        $http_s=$_SERVER['REQUEST_SCHEME'];
        $serverName=$_SERVER['SERVER_NAME'];
        $serverPath=$http_s . "://" .$serverName . '/' .$path;
        echo $serverPath;


    }
}

if (!function_exists('backend_url()')){
    function backend_url($uri=''){
        $path=trim($uri, '/');
        return base_url("backend/" .$path);


    }
}
