<?php
session_start();
$page = 'login';
$methode = $_SERVER['REQUEST_METHOD'];
if ($methode === 'GET') {
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
    require '_entete.php';
    require '_nav.php';
    ?>
    <main class="container">
        <p class="h2">Identifiez vous</p>
        <form method="post" action="../securite/loginrequeteprepare.php">
            <?php
            if (isset($_SESSION['erreur'])) {
                echo '<div class="alert alert-danger" role="alert">';
                echo $_SESSION['erreur'];
                echo '</div>';
            }
            ?>
            <div class="mb-3">
                <label for="id_login" class="form-label">Votre login</label>
                <input type="text" name="login" class="form-control" id="id_login" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="id_psw" class="form-label">Votre mot de passe</label>
                <input type="password" name="psw" class="form-control" id="id_psw">
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </main>
    <?php
    require '_pied.php';
    ?>
</body>

</html>
<?php
} else {
    $dsn ='mysql:host=localhost;dbname=papeterie;charset=utf8';
    $userName = 'root';
    $password = '';
    
    $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_EMAIL);
    $psw = filter_input(INPUT_POST, 'psw', FILTER_SANITIZE_SPECIAL_CHARS);
    
    $refPdo = new PDO($dsn, $userName, $password); 
    
    // interroger la base de données avec le login
    $sql = 'SELECT * FROM user WHERE login=:ident'; //mettre les 2 pts suivi dun identifiant 
    
    $stat_user = $refPdo->prepare($sql); // mettre prepare a la place de query
    $stat_user->bindParam(':ident', $login); //va permettre de relier la valeur au paramettre nomé $login = la variable login
    $stat_user ->execute(); //permet d'executer 

    
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
            $_SESSION['erreur'] = 'Mot de passe erroné !';
            header('Location: loginrequeteprepare.php');
        }
    } else {    // login non trouvé en base
        $_SESSION['erreur'] = 'Login erroné !';
        header('Location: loginrequeteprepare.php');
    }

}
?>