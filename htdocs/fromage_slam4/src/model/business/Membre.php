<?php
namespace thalia_sahed\model\business;

class Membre implements iBusinessClass
{
    //Attributs
    public $id;
    public $username;
    public $email;
    public $enabled;
    public $password;
    public $lastLogin;
    public $pseudo;
    public $entryDate;

    //Getteurs et Setteurs
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }


    public function getUsername()
    {
        return $this->username;
    }
    public function setUsername($username)
    {
        $this->username = $username;
    }


    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getEnabled()
    {
        return $this->enabled;
    }
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }


    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }


    public function getLastLogin()
    {
        return $this->lastLogin;
    }
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;
    }


    public function getPseudo()
    {
        return $this->pseudo;
    }
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }


    public function getEntryDate()
    {
        return $this->entryDate;
    }
    public function setEntryDate($entryDate)
    {
        $this->entryDate = $entryDate;
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

    public function jsonSerializable()
    {
        $array = [
            'id' => $this->id,
            'username' => $this->username,
            'email'=> $this->email,
            'enabled'=> $this->enabled,
            'password'=> $this->password,
            'lastLogin'=> $this->lastLogin,
            'pseudo'=> $this->pseudo,
            'entryDate'=> $this->entryDate
        ];
        return $array;
    }

    public static function jsonParse($jsonString)
    {
        $tab = json_decode($jsonString, true);
        $member = new Membre($tab);

        return $member;
    }
}