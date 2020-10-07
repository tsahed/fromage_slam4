<?php
require_once('model/business/perso.php');
use thalia\model\business\perso;


$donnees = array('nom'=> "Thalïa", 'age' => 21, 'force' => 1500, 'experience' => 2, 'localisation' => "Annecy", 'degats' => 40);
$perso1 = new perso($donnees);
?>


<h1>Avant combat</h1>
<h3>Personnage 1 : <?php echo $perso1->_nom ?></h3>
<p><b>Force : </b><?php echo $perso1->_force;?></p>
<p><b>Experience : </b><?php echo $perso1->_experience;?></p>
<p><b>Dégâts : </b><?php echo $perso1->_degats;?></p>
