<?php

require 'modeles/modeleUser.php';

switch ($action) {
    case 'login': 
        $erreur = '';
        $login = '';
        $methode = $_SERVER['REQUEST_METHOD'];
        if ($methode === 'POST') {
           
            try{
                login();
                $vue ='accueil';
            }catch(Exception $e){
                $erreur =$e->getMessage();
                $login = ''; //aprés le message derreur me remettre le login a 0
                $vue ='formlogin';
            }
        }else {
            
            $vue ='formLogin';
        }
        
        break;

    case 'deconnect':
        logout();
        break;

    case 'newCompte':
        $methode = $_SERVER['REQUEST_METHOD'];
        if ($methode === 'POST') {
            try{
            enreguser();
            $vue='accueil';
            }catch(Exception $err){
                $erreur = $err->getMessage(); 
                $vue='user/creercompte';
            }
        }else{
            $erreur='';
            $vue='user/creercompte';
        }
    break;

        

    default:
        # code...
        break;
}
