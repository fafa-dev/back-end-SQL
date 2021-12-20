<?php
session_start();
$page = 'login';
$erreur = '';
$login = '';
require '../pages/dao.php';

$methode = $_SERVER['REQUEST_METHOD'];
if ($methode === 'POST') {
    $dsn ='mysql:host=localhost;dbname=papeterie;charset=utf8';
    $userName = 'root';
    $password = '';
    
    $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_EMAIL);
    $psw = filter_input(INPUT_POST, 'psw', FILTER_SANITIZE_SPECIAL_CHARS);
    
    $refPdo = new PDO($dsn, $userName, $password); 
    
    // interroger la base de données avec le login
    // $sql = 'SELECT * FROM users WHERE login=:ident';
    // $stat_user = $refPdo->prepare($sql);
    // $stat_user->bindParam(':ident', $login, PDO::PARAM_STR);
    // $stat_user->execute();
    
    $user=getLoginBysql($login);

   
    if ($user) {
        // comparer le $psw avec le mot de passe de la base de données
       
        $mdp = 'admin';
        if (password_verify($psw, $user['psw'])) {
            // si connecter alors mémoriser en session le login et ...
    
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['role'] = $user['role'];
            header('Location: /index.php');
            exit();
        } else {    // mot de passe incorrect
            $erreur = 'Mot de passe erroné !';
        }
        if ($psw===$user['psw']) {
            // si connecter alors mémoriser en session le login et ...
    
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['role'] = $user['role'];
            header('Location: /index.php');
            exit();
        } else {    // mot de passe incorrect
            $erreur = 'Mot de passe erroné !';
        }
    } else {    // login non trouvé en base
        $erreur = 'Login erroné !';
        $login = '';
    }
}
?>
<!--
/**
 * @author Didier Bonneau
 * @copyright (c) Afpa, DWWM
 * @version 1.0 du 01/04/2019
 * Fichier principal de l'application TP_Papeterie
 */
-->
<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>
        210-TP01_PHP_Papeterie DWWM
    </title>
    <link href="/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="/css/papeterie.css" rel="stylesheet" type="text/css" />
    <script src="/dist/js/jquery-3.4.1.js"></script>
    <script src="/dist/js/bootstrap.js"></script>
</head>

<body>
    <?php
    require '../pages/_entete.php';
    require '../pages/_nav.php';
    ?>
    <main class="container">
        <p class="h2">Identifiez vous</p>
        <form method="post" action="login.php">
            <?php
            if ($erreur) {
                echo '<div class="alert alert-danger" role="alert">';
                echo $erreur;
                echo '</div>';
            }
            ?>
            <div class="mb-3">
                <label for="id_login" class="form-label">Votre login</label>
                <input type="text" value="<?= $login; ?>" name="login" class="form-control" id="id_login" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="id_psw" class="form-label">Votre mot de passe</label>
                <input type="password" name="psw" class="form-control" id="id_psw">
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </main>
    <?php
    require '../pages/_pied.php';
    ?>
</body>

</html>

