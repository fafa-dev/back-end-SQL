<?php
session_start();
$vue = '';

if (empty($_GET)) {
    $entite = '';
    $action = 'home';
} else {
    $entite = $_GET['entite'];
    $action = $_GET['action'];
}
try {
    switch ($entite) {
        case 'article':
            require 'controleurs/controleurArticle.php';
            break;

        case 'personne':
            require 'controleurs/controleurPersonne.php';
            break;

        default:
            $vue = 'home';
            break;
    }
} catch (PDOException $err){
    $vue = 'erreur';
}


require 'vues/template.php';
