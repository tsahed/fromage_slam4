<?php
namespace thalia\model\business;

class perso
{
    public $_force;
    public $_localisation;
    public $_experience;
    public $_degats;
    public $_nom;
    public $_age;

    // Setteurs
    public function setForce($force)
    {
        $this->_force = $force;
    }

    public function setLocalisation($localisation)
    {
        $this->_localisation = $localisation;
    }

    public function setExperience($experience)
    {
        $this->_experience = $experience;
    }

    public function setDegats($degats)
    {
        $this->_degats = $degats;
    }

    function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function setAge($age)
    {
        $this->_age = $age;
    }

    public function frapper($_perso)
    {
        $_degats= $_perso->_degats;
        $_perso ->_degats = ($_degats + $this->_force);
        return $_perso->_degats;
    }
    public function gagnerExperience()
    {
        $_age = $this->_age;
        $this->_experience += ceil($_age*0.45);
        return $this->_experience;
    }

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    private function hydrate(array $donnees)
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

?>

