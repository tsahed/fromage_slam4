<?php
namespace model\business;

class Autoloader
{
    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    static function autoload($class)
    {
        $file = str_replace('\\', '/', $class);
        $file = 'C:/Bitnami/wampstack-7.4.6-1/apps/classephp/htdocs/fromage_slam4/'. $file . '.php';
       // echo $file;
//        if(file_exists($file))
            return require $file;

    }
}