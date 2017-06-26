<?php

/**
Classe gérant l'utilisateur
*/
class UserCtrl 
{
    protected $login;
    protected $mdp;
 
    public function __construct() 
    {
        parent::__construct();
    } 

    public function verifFormulaire() 
    {
        // récupération du login et mdp 
        $login = isset($_POST['login']);
        $mdp = isset($_POST['mdp']);
        //TODO : vérifier que le login et mdp sont correct
        require_once('Models/userMdl.php');
        $authStatus = UserMdl::checkUser($login, $mdp);           // retourne un booléen d'un appel à la classe static
        // si ok lancer la vue affichant la page d'accueil      (pour cela lancer l'url avec le bon controller)
        //sinon lancer la page login
    } 

}
