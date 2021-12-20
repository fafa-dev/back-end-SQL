<?php
require 'base/Dao.php';    

function login() {

    //global $vue;
    //global $erreur;
    global $login;


        $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_EMAIL);
        $psw = filter_input(INPUT_POST, 'psw', FILTER_SANITIZE_SPECIAL_CHARS);
        
       
        // interroger la base de données avec le login
        $dbDao = new Dao();
        $user = $dbDao->getUserByLogin($login);
    
        if ($user) {
            // comparer le $psw avec le mot de passe de la base de données
        
            if (password_verify($psw, $user['psw'])) {
                // si connecter alors mémoriser en session le login et ...
        
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['role'] = $user['role'];
                //$vue = 'accueil';

            } else {    // mot de passe incorrect
                //$erreur = 'Mot de passe erroné !';
                //$vue ='formLogin';
                throw new Exception('Mot de passe erroné !');
            }
        } else {    // login non trouvé en base
            //$erreur = 'Login erroné !';
            //$login = '';
            //$vue ='formLogin';
            throw new Exception('Login erroné !');
        }
}

function logout() {

    global $vue;

    $_SESSION = array();
    session_destroy();
    
    $vue = 'accueil';
}

function enregUser() {

    $client = [
        'nom' => filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS),
        'prenom' => filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_SPECIAL_CHARS),
        'login' => filter_input(INPUT_POST, 'login', FILTER_SANITIZE_EMAIL),
        'psw' => filter_input(INPUT_POST, 'psw', FILTER_SANITIZE_SPECIAL_CHARS),
        'role' => 'client'
    ];

    $dbDao = new Dao();
    
    $dbDao->setNewUser($client);
    $_SESSION['nom'] = $client['nom'];
    $_SESSION['role'] = $client['role'];

}