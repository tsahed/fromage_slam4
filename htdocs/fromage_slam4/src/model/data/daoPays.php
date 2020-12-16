<?php


namespace thalia_sahed\model\data;

use model\business\Pays;
use mysql_xdevapi\Exception;

class daoPays extends DBAL
{
    public function getPaysById(int $idPays) : \thalia_sahed\model\business\Pays
    {
        try {
            $sql = 'SELECT id, nom FROM Pays WHERE id='.$idPays;
            $result = $this->pdo->query($sql);
            var_dump($result);
            $row=$result->fetch(\PDO::FETCH_ASSOC);
            echo  $row['id'].','.$row['nom'];
        }
        catch(\Exception $exception) {

        }
        return new \thalia_sahed\model\business\Pays($row);
    }

    public function getPaysByNom(string $nomPays) : \thalia_sahed\model\business\Pays
    {
        try {
            $sql = 'SELECT id, nom FROM Pays WHERE nom="'.$nomPays.'"';
            $result = $this->pdo->query($sql);
            var_dump($result);
            $row=$result->fetch(\PDO::FETCH_ASSOC);
            echo  $row['id'].','.$row['nom'];
        }
        catch (\Exception $exception) {

        }
        return new \thalia_sahed\model\business\Pays($row);
    }
}