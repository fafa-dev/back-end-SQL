<?php
    require 'base/dao.php';


function login(){

    global $vue;
    global $erreur ;

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   

    $login = $_POST['login'];

  try{
    $personne = getPersonneByLogin($login);

    //si login bon enregistrement en base nous avons remplacer le if par try
    //if ($personne != false) {
        $_SESSION['user'] = $personne['nom'];
        //header('Location: index.php'); on enleve le header on la remplace par le $vue

        $vue = 'home'; //ca va lancer la page home.php
        exit();
    //}
    }catch(Exception $e){        // aller chercher lexception 
        
        $erreur = $e -> getMessage() ; // aller chercher le message derreur sur la page DAO.php
        $vue = 'form_login';
    }
}
// $vue = 'form_login'; //si je ne suis pas en post tu m'affiche ca si on met ca dans un else on a plus besoin du exit()
// //cette page est dans le vue
// }