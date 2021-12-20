<?php
    
    session_start();

   if(isset($_GET['entite'])) {
        $action = $_GET['action'];
        $entite= $_GET['entite'];
        //on a attribuer les variable de la bar nav 
    }else{

        $entite='';
        $action='';
    }
    $vue="";

    switch ($entite) {

        case 'user':// controleur daction sur les personnes
            require 'controleurs/controleuruser.php';


            break;
        case 'article': //article dans la base de donné
                # code...
            break;

        default:
            $vue = 'accueil';
            break;
    }




    include 'vues/template.php';