<?php


namespace thalia_sahed\model\data;

use model\business\Fromage;

class daoFromage extends DBAL
{
    public function insert(int $id, string $nom, \DateTime $dureeAffinage, \DateTime $dateCreation, string $image, string $recette, string $histoire)
    : \thalia_sahed\model\business\Fromage
    {
        try {
            $sql = 'INSERT INTO Fromage (id, pays_origine, nom, creation, image, dureeAffinage, recette, histoire) 
                    VALUES ($id,:pays_origine,$nom,$dateCreation,$image,$dureeAffinage,$recette,$histoire)';
        }

        catch (\Exception $exception) {

        }
    }
}