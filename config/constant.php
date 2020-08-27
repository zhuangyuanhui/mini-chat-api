<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Constant Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */
    'path'          => resource_path('constants'),

    /*
    |--------------------------------------------------------------------------
    | 描述文件生成路径
    |--------------------------------------------------------------------------
    |
    | PhpStorm会自动加载识别根目录下.phpstorm.meta.php文件或.phpstorm.meta.php目录下
    | 的所有文件，此处需与ide-helper同时配置。
    |
    */
    'meta_filename' => '.phpstorm.meta.php/constant.php',
];