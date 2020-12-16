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
    'enabled'=> false,
    'password'=>'okok',
    'lastLogin'=>'2000-02-02',
    'pseudo'=>"Tart",
    'entryDate'=>'1962-02-02',
];
$thalia = new \thalia_sahed\model\business\Membre($tableau);

//Conversion du tableau an chaîne json
$jsonString = json_encode($thalia);
echo '<b>'.'Tableau convertit en chaîne Json'.'</b>'.'</br>';
echo $jsonString.'</br>';

//Conversipn de la chaîne json en membre
$member = \thalia_sahed\model\business\Membre::jsonParse($jsonString);
echo '</br>';
//Affichage du nouveau membre
echo '<b>'.'Nouveau membre ajouté'.'</b>'.'</br>';
echo 'Id : '.$member->getId().'</br>';
echo 'Username : '.$member->getUsername().'</br>';
echo 'Email : '.$member->getEmail().'</br>';
echo 'Enabled : '.$member->getEnabled().'</br>';
echo 'Password : '.$member->getPassword().'</br>';
echo 'Last login : '.$member->getLastLogin().'</br>';
echo 'Pseudo : '.$member->getPseudo().'</br>';
echo 'Entry Date : '.$member->getEntryDate().'</br>';

$undaoPays = new \thalia_sahed\model\data\daoPays();
echo '</br>';
$undaoPays->getPaysById(74);
echo '</br>';
$undaoPays->getPaysByNom("France");

