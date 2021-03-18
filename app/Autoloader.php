<?php
namespace App;
class Autoloader
{
    private static function autoload($class)
    {
        if (strpos($class, __NAMESPACE__.'\\') === 0) {
            $class = str_replace(__NAMESPACE__.'\\', '', $class);
            $class = str_replace('\\', '/', $class);
            require_once __DIR__.'/'.$class.'.php';
        }
    }

    public static function register()
    {
        spl_autoload_register([__CLASS__, 'autoload']);
    }
}