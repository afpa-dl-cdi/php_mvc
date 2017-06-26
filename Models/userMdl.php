<?php 

/**
Classe de type Model permettant la connection à la bdd en lien avec l'utilisateur
*/
class UserMdl 
{
    public function __construct() 
    {
        include_once('./databaseConf.php');
    }

    /**
    requête sql de verification de user
    @param $login champ utilisateur
    @param $mdp champ mot de passe
    @return resultat sous forme de tableau de la requête
    @Don't forget the quotes
    */
    static public function checkUser($login, $mdp) 
    {
        require_once('./Models/dbConnector.php');
        $pdo = DbConnector::connect();
        $query = $pdo->query("SELECT * FROM Armateur WHERE LoginArma='$login' AND Motdepassearma = '$mdp'");
        $result = $query->fetch();
        if (count($result) > 0) return true;
        else return false;
    }
}