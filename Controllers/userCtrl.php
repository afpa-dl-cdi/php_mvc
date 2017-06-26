<?php

/**
Classe gérant l'utilisateur
*/
class UserCtrl 
{
    protected $login;
    protected $mdp;
 
    /** 
    Constructeur 
    */
    public function __construct() 
    {
    } 

    /** 
    méthode pour la vérification du formulaire de login
    */
    public function verifFormulaire() 
    {
        // récupération du login et mdp 
      if (isset($_POST['login'])) $login = $_POST['login'];
      if (isset($_POST['mdp'])) $mdp = $_POST['mdp'];

        //TODO : vérifier que le login et mdp sont correct
        require_once('Models/userMdl.php');
        $authStatus = UserMdl::checkUser($login, $mdp);           // retourne un booléen d'un appel à la classe static
        // si ok lancer la vue affichant la page d'accueil      (pour cela lancer l'url avec le bon controller)
        //sinon lancer la page login
    } 

    /**
    Affiche les informations de l'utilisateur
    */
    public function profilUser() 
    {
        require_once('Models/userMdl.php');
        //juste pour le test nous mettons 
        $id = 1;
        $data = userMdl::profilUser($id);
        
        require_once("./Views/profilView.php");
    }

}
