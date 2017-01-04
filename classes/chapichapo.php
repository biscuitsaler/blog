<?php
class chapichapo
{
private $swag = 100;
private $honte = 70;
private $talent = 1;

    /**
     * @param $class
     */
    public static function classesAutoloader($class) {
    $path = static::$classDirectory."class.php";
    if (file_exists($path) && is_readable($path)) require $path;
  }

}