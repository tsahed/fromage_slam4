<?php


namespace thalia_sahed\model\business;


abstract class Aliment
{
    //Attributs
    public $_id;
    public $_nom;
    public $_origine;
    public $_date_creation;
    public $_image;

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


    public function getOrigine()
    {
        return $this->_origine;
    }
    public function setOrigine($origine)
    {
        $this->_origine = $origine;
    }


    public function getDateCreation()
    {
        return $this->_date_creation;
    }
    public function setDateCreation($date_creation)
    {
        $this->_date_creation = $date_creation;
    }


    public function getImage()
    {
        return $this->_image;
    }
    public function setImage($image)
    {
        $this->_image = $image;
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

    public function display()
    {
        echo 'Id : '.$this->getId();
        echo 'Nom : '.$this->getNom();
        echo 'Origine : '.$this->getOrigine();
        echo 'Date de création : '.$this->getDateCreation();
        echo 'Image : '.$this->getImage();
    }
}