<?php
namespace thalia_sahed\model\business;

class Pays implements iBusinessClass
{
    //Attributs
    private $_id;
    private $_nom;

    //Getteurs et setteurs
    public function getId()
    {
        return $this->_id;
    }
    public function setId($id)
    {
        $this->_id = $id;
    }


    public function getNom()
    {
        return $this->_nom;
    }
    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    //Constructeur
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    //Méthodes
    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set'.ucfirst($key);

            // Si le setter correspondant existe.
            if (method_exists($this, $method))
            {
                // On appelle le setter.
                $this->$method($value);
            }
        }
    }
}