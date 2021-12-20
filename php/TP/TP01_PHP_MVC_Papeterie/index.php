<?php
    session_start();
    if (isset($_GET['entite'])){
        $entite = $_GET['entite'];
        $action = $_GET['action'];
    } else {
        $entite = 'cafe';
        $action = 'boire';
    }
    $vue = '';


    try{
    switch ($entite) {
        case 'user':
            require 'controleurs/controleurUser.php';
            break;

        case 'article':
            require 'controleurs/controleurarticle.php';

            break;
        
        default:
            $vue = 'accueil';
            break;
    }
    }catch(Exception $e){
        $erreur = $e->getMessage();//recupére le message mis sur le dao
        $vue ='erreur';

    }


    include 'vues/template.php';