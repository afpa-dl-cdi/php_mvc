<?php

/**
index.php est l'équivalent du main sur notre site php MVC. C'est lui qui va recevoir toutes les requêtes qu'il redirigera ensuite 
sur les controllers.
*/

/** 
récupérer la requête de l'utilisateur 
*/
$controller = $_GET['controller']; // l'appel au site se fera toujours par l'url index.php?controller=moncontroller

/** 
rediriger sur le bon controller
*/
switch ($controller)
{
    case 'login' : 
        include_once("Controllers/loginCtrl.php");
        $loginCtrl = new LoginCtrl();           // nous instancions un nouvel objet de type controlleur  
        $loginCtrl->launchView();                 // appel au lancement de la vue         
        break;
    case 'verifuser':
        // chargement du controller et du model 
        include_once("Controllers/userCtrl.php");
        //TODO 
        break;
    case 'tournee':
        include_once("Controllers/tourneeCtrl.php");
        //TODO
        break;
    case 'accueil': 
        include_once("Controllers/accueilCtrl.php");
        //TODO
        break;
    default:
        include_once("Controllers/accueilCtrl.php");
        break;
}
