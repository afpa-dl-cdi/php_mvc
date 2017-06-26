<?php
/**
Classe gérant la page de login
*/
class LoginCtrl 
{
    /**
    Constructeur 
    */
    public function __construct() 
    {
        parent::__construct();
    }

    /**
    Lancement de la page "html"
    TODO : à factoriser dans une classe mère

    */
    public function launchView() 
    {
        require_once('./Views/loginView.php'); 
    }
}