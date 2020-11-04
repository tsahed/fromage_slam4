<?php

class Autoloader
{
    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
    static function autoload($class)
    {
        $file = str_replace('\\', '/', $class);
        $file = $file.'.php';
        return require $file;
    }
}