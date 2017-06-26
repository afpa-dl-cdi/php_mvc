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
    */
    public function launchView() 
    {
        require('./Views/templates/header.php');
       require_once('./Views/loginView.php'); 
    }
}