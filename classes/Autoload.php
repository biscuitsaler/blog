<?php
class Autoload
{
private static $classdirectory = './classes/';

    /**
     * @param $class
     */
    public static function classesAutoloader($class) {
    $path = static::$classdirectory."$class.php";
    if (file_exists($path)&& is_readable($path)) require $path;

    }

}
