<?php
//require_once ('model\business\Fromage.php');
//use thalia\model\business\Fromage;


use model\business;
require 'Autoloader.php';
Autoloader::register();


$t = array('identifiant'=>1,'Nom'=>'Camembert');
$camembert = new \model\business\Fromage($t);
$t = array('identifiant'=>2,'Nom'=>'roquefort');
$roquefort = new \model\business\Fromage($t);

echo $camembert -> _Nom;
echo $camembert -> _identifiant;
echo $roquefort -> _Nom;
echo $roquefort -> _identifiant;