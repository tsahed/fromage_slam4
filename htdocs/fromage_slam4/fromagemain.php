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

//echo 'Id : '.$camembert -> getId();
//echo ' Nom : '.$camembert -> getNom();

$tableau = [
    'id'=> 1,
    'username'=>"Thalïa",
    'email'=>'thalia@email.fr',
    'present'=>0,
    'password'=>'okok',
    'lasLogin'=>'2000-02-02',
    'pseudo'=>"Tart",
    'dateEntry'=>'1962-02-02',
];
$thalia = new \thalia_sahed\model\business\Membre($tableau);

//$tableau = json_encode($thalia);

\thalia_sahed\model\business\Membre::jsonParse($thalia, $tableau);