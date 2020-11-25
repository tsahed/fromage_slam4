<?php
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

//require 'Autoloader.php';
//Autoloader::register();
require __DIR__ . '/vendor/autoload.php';
use thalia_sahed\model\business\Fromage;

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->addWarning('Foo');


$t = array('Id'=>1,'Nom'=>'Camembert');
$camembert = new Fromage($t);

echo 'Id : '.$camembert -> getId();
echo ' Nom : '.$camembert -> getNom();

