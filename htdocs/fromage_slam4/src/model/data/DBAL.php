<?php


namespace thalia_sahed\model\data;

abstract class DBAL
{
    // protected $objLog;
    protected $pdo;

    /**
     * DBAL constructor.
     */
    public function __construct()
    {
        $username = "root";
        $password = "5MichelAnnecy";
        $dbname = "dbclubfromage";

        // $this->objLog = new \util\log();
        try {
            $this->pdo = new \PDO("mysql:host=localhost;dbname=$dbname;charset=UTF8",$username,$password);
            $this->pdo->setAttribute( \PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }
        catch (\PDOException $e) {
            // $this->objLog->insertErrException($e);
            echo $e->getMessage();
            die();
        }
    }

    /**
     * @return \PDO
     */
    protected function getPdo() : \PDO
    {
        return $this->pdo;
    }

    /**
     * @param \PDO $pdo
     */
    protected function setPdo(\PDO $pdo): void
    {
        $this->pdo = $pdo;
    }

}