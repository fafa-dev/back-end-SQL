<?php
// démarrage de la gestion des sessions
session_start();

//var_dump($_POST);
$login = $_POST['login'];
$psw = $_POST['psw'];

// interroger la base de données avec le login
if ($login = 'admin@dwwm.fr') {
    // comparer le $psw avec le mot de passe de la base de données
    $mdp = 'admin';
    if ($mdp === $psw) {
        // si connecter alors mémoriser en session le login et ...

        $_SESSION['login'] = $login;
        header('Location: index.php');
    } else {    // mot de passe incorrect
        header('Location: connect.php');
    }
} else {    // login non trouvé en base
    header('Location: connect.php');
}