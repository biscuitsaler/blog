<?php
require ('./classes/Autoload.php');
spl_autoload_register('Autoload::classesAutoloader');

$chapichapo = new chapichapo();

var_dump($chapichapo);