<?php
/**
Classe permettant d'établir la connexion dbo à la bdd
*/
class DbConnector 
{
    private $mysqlPDO = null;

    /**
    Connexion à MySQL via le PDO
    */
    public static function connect() 
    {
        require_once('./Models/databaseConf.php');
        try 
        {
            $mysqlPDO = new PDO(
                "mysql:host=".$host.";dbname=".$bdd.";charset=utf8",
                $userBdd, $mdpBdd,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );
            return $mysqlPDO;
        }
        catch(Exception $e)
        {
            // en cas erreur on affiche un message et on arrete tout
            die('<h1>Erreur de connexion : </h1>' . $e->getMessage());
        }
    }

    /**
    Deconnexion de MySQL
    */
    public static function disconnect() 
    {
        $mysqlPDO = null;
    }


}