<?php


namespace thalia_sahed\model\business;


abstract class Aliment
{
    //Attributs
    private $_id;
    private $_nom;
    private $_origine;
    private $_date_creation;
    private $_image;

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

    //Méthodes

}