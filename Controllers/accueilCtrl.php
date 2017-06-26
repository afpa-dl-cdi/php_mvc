<?php 

class AccueilCtrl
{
    public function __construct() 
    {

    }

    /**
    Lancement de la page "html"
    TODO : à factoriser dans une classe mère
    */
    public function launchView() 
    {
       require('./Views/accueilView.php'); 
    }
}