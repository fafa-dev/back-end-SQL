<?php
 require 'base/dao.php';
function login(){
   global $vue;
   global $erreur;
   global $login;

    $methode = $_SERVER['REQUEST_METHOD'];
        if ($methode === 'POST') {
             
          $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_EMAIL);
          $psw = filter_input(INPUT_POST, 'psw', FILTER_SANITIZE_SPECIAL_CHARS);
          
         
          // interroger la base de données avec le login
          $user = getUserByLogin($login);
      
          if ($user) {
              // comparer le $psw avec le mot de passe de la base de données
          
              if (password_verify($psw, $user['psw'])) {
                  // si connecter alors mémoriser en session le login et ...
          
                  $_SESSION['nom'] = $user['nom'];
                  $_SESSION['role'] = $user['role'];
                  $vue = 'accueil';// si cest bon tu me redirigie vers accueil.php
              } else {    // mot de passe incorrect
                  $erreur = 'Mot de passe erroné !';
                  $vue ='formlogin';
              }if ($psw=== $user['psw']) {
                // si connecter alors mémoriser en session le login et ...
        
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['role'] = $user['role'];
                $vue = 'accueil';// si cest bon tu me redirigie vers accueil.php
            } else {    // mot de passe incorrect
                $erreur = 'Mot de passe erroné !';
                $vue ='formlogin';
            }
          } else {    // login non trouvé en base
              $erreur = 'Login erroné !';
              $login = '';
              $vue ='formlogin';
          }
        }else{
          $vue='formlogin'; 
        }
}


function deconnect(){
global $vue;


$_SESSION = array();
session_destroy();
$vue='accueil';

}