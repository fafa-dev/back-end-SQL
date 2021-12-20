<?php
require 'models/modelPersonne.php';


switch ($action) {
    case 'login':
        $erreur =''; // variable declarer dans le if de modelpersonne.php
        login(); //cette fonction on l'incluera dans le model 
        break;

    case 'connexion';
        $erreur ='';
        $vue ='form_login';
        break;

    
    default:
        # code...
        break;
}