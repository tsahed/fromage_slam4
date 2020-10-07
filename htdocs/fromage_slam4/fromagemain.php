<?php
//require_once ('model\business\Fromage.php');
//use thalia\model\business\Fromage;



require_once 'model/Autoloader.php';
\model\business\Autoloader::register();

$f = new \model\business\Fromage();

echo 'c';