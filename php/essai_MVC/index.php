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
            $controleur = new ControleurArticle();
            $controleur -> execute($action);//on est aller chercher la function execute du controleur 
            break;

        case 'personne':
            require 'controleurs/controleurPersonne.php';
            $controleur = new controleurPersonne();
            $controleur -> execute($action);//on est aller chercher la function execute du controleur 
     
            break;

        default:
        require 'controleurs/controleurGeneral.php';
            $controleur = new ControleurGeneral();
            $controleur -> execute($action);//on est aller chercher la function execute du controleur 
          break;
    }
} catch (PDOException $err){
    echo $err->getMessage();

}
// $nom_fichier = 'ma_photo.jpeg';
// $param = explode('.', $nom_fichier);
// var_dump($param);
// $new_nom = uniqid('img');
// echo $new_nom . '.jfif';


