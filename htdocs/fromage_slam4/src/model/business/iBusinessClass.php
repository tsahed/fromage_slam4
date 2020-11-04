<?php


namespace thalia_sahed\model\business;


interface iBusinessClass
{
    //Constructeur
    public function __construct(array $data);

    //Méthodes
    public function hydrate(array $donnees);
}