<?php
namespace thalia_sahed\model\business;

class Membre implements iBusinessClass
{
    //Attributs
    public $_id;
    public $_username;
    public $_email;
    public $_enabled;
    public $_password;
    public $_lastLogin;
    public $_pseudo;
    public $_entryDate;

    //Getteurs et Setteurs
    public function getId()
    {
        return $this->_id;
    }
    public function setId($id)
    {
        $this->_id = $id;
    }


    public function getUsername()
    {
        return $this->_username;
    }
    public function setUsername($username)
    {
        $this->_username = $username;
    }


    public function getEmail()
    {
        return $this->_email;
    }
    public function setEmail($email)
    {
        $this->_email = $email;
    }


    public function getEnabled()
    {
        return $this->_enabled;
    }
    public function setEnabled($enabled)
    {
        $this->_enabled = $enabled;
    }


    public function getPassword()
    {
        return $this->_password;
    }
    public function setPassword($password)
    {
        $this->_password = $password;
    }


    public function getLastLogin()
    {
        return $this->_lastLogin;
    }
    public function setLastLogin($lastLogin)
    {
        $this->_lastLogin = $lastLogin;
    }


    public function getPseudo()
    {
        return $this->_pseudo;
    }
    public function setPseudo($pseudo)
    {
        $this->_pseudo = $pseudo;
    }


    public function getEntryDate()
    {
        return $this->_entryDate;
    }
    public function setEntryDate($entryDate)
    {
        $this->_entryDate = $entryDate;
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
            'id' => $this->_id,
            'username' => $this->_username,
            'email'=> $this->_email,
            'enabled'=> $this->_enabled,
            'password'=> $this->_password,
            'lastLogin'=> $this->_lastLogin,
            'pseudo'=> $this->_pseudo,
            'entryDate'=> $this->_entryDate
        ];
        return ($array);
    }

    public static function jsonParse($v, $array)
    {
        $v = json_encode($array);
        $member = new Membre(var_dump(json_decode($v,true)));
        print_r($member);
        var_dump($member);

        return $v;
    }
}