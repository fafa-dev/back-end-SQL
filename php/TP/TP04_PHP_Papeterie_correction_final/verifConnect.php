<?php
// démarrage de la gestion des sessions
session_start();
$dsn ='mysql:host=localhost;dbname=papeterie;charset=utf8';
$userName = 'root';
$password = '';

//var_dump($_POST);
//$login = $_POST['login'];
//$psw = $_POST['psw'];
$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_EMAIL);
$psw = filter_input(INPUT_POST, 'psw', FILTER_SANITIZE_SPECIAL_CHARS);

$refPdo = new PDO($dsn, $userName, $password); 

// interroger la base de données avec le login
$sql = 'SELECT * FROM users WHERE login=\''.$login.'\';';
$stat_user = $refPdo->query($sql);

if ($stat_user->rowCount() == 1) {
    // comparer le $psw avec le mot de passe de la base de données
    $user = $stat_user->fetch(PDO::FETCH_ASSOC);

    $mdp = 'admin';
    if ($user['psw'] === $psw) {
        // si connecter alors mémoriser en session le login et ...

        $_SESSION['nom'] = $user['nom'];
        $_SESSION['role'] = $user['role'];
        header('Location: index.php');
    } else {    // mot de passe incorrect
        header('Location: connect.php');
    }
} else {    // login non trouvé en base
    header('Location: connect.php');
}