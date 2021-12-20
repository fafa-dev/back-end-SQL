<?php

require 'modeles/modeleUser.php';

switch ($action) {
    case 'login':
        $erreur = '';
        $login = '';
        $methode = $_SERVER['REQUEST_METHOD'];
        if ($methode === 'POST') {
            try {
                login();
                $vue = 'accueil';
            } catch (Exception $e) {
                echo 'passage dans erreur login';
                $erreur = $e->getMessage();
                $login = '';
                $vue = 'formLogin';
            }
        } else {
            $vue = 'formLogin';
        }
        break;

    case 'deconnect':
        logout();
        break;

    case 'newCompte':
        $methode = $_SERVER['REQUEST_METHOD'];
        if ($methode === 'POST') {
            try {
                enregUser();
                $vue = 'accueil';
            } catch (Exception $err) {
                $erreur = $err->getMessage();
                $vue = 'user/creerCompte';
            }
        } else {
            $erreur = '';
            $vue = 'user/creerCompte';
        }
        break;

    default:
        # code...
        break;
}
