<?php

session_start();
$vue;

    if (empty($_GET)) {
        $entite =''; //ce quon va mettre dans la barnav url
        $action ='home';//ce quon va mettre dans la barnav url
        
    }else{
        $entite =$_GET['entite'];// ce quon va trouver sur l'url
        $action = $_GET['action']; 
    }

    try{
    switch ($entite) {
        case 'article':
            require 'controleurs/controleurArticle.php';
            break;

        case 'personne':
            require 'controleurs/controleurPersonne.php'; //toutes les fonction correspondant a laction que l'on doit faire 
            break;
            
        default:
            $vue = 'home'; //nous avons enlever de lentete pour la mettre ici 
            break;
    }
}catch(PDOException $err){
    $vue ='erreur';


}

    include 'vues/template.php';
