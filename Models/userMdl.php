<?php 

/**
Classe de type Model permettant la connection à la bdd en lien avec l'utilisateur
*/
class UserMdl 
{


    public function __construct() 
    {
        parent::__construct();
        include_once('./databaseConf.php');
    }

    static public function checkUser($login, $mdp) 
    {
       $pdo = $this->connect();
        $query = $pdo->query("SELECT id FROM users WHERE login=$login AND mdp = $mdp");
        $result = $query->fetch();
        if (count($result) > 0) return true;
        else return false;
    }

    public function connect() 
    {
        try 
        {
            $mysqlPDO = new PDO(
                "mysql:host=".$host.";dbname=".$bdd.";charset=utf8",
                $userBdd, $mdpBdd,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );
        }
        catch(Exception $e)
        {
            // en cas erreur on affiche un message et on arrete tout
            die('<h1>Erreur de connexion : </h1>' . $e->getMessage());
        }

        return $mysqlPDO;
    }
}