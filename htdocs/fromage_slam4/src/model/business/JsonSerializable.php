<?php


namespace thalia_sahed\model\business;


interface JsonSerializable
{
    /* Méthodes */
    public function jsonSerialize ( ) : mixed;
}