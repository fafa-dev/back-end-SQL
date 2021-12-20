<?php
require 'base/dao.php';

function login()
{

    global $vue;
    global $erreur;

    //if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $login = $_POST['login'];

        try {
            $personne = getPersonneByLogin($login);

            $_SESSION['user'] = $personne['nom'];
            $vue = 'home';
        } catch (Exception $e) {
            $erreur = $e->getMessage();
            $vue = 'form_login';
        }
    // } else {

    //     $vue = 'form_login';
    // }
}
