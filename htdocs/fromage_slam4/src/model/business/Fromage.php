<?php
namespace thalia_sahed\model\business;

class Fromage implements iBusinessClass
{
    //Attributs
    public $_id;
    public $_nom;
    public $_duree_affinage;
    public $_date_creation;
    public $_image;
    public $_recette;
    public $_histoire;


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


    public function getDureeAffinage()
    {
        return $this->_duree_affinage;
    }
    public function setDureeAffinage($duree_affinage)
    {
        $this->_duree_affinage = $duree_affinage;
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


    public function getRecette()
    {
        return $this->_recette;
    }
    public function setRecette($recette)
    {
        $this->_recette = $recette;
    }


    public function getHistoire()
    {
        return $this->_histoire;
    }
    public function setHistoire($histoire)
    {
        $this->_histoire = $histoire;
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