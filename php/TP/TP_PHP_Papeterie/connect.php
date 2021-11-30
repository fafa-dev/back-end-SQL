<?php
$page = 'connexion';
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
    <link href="dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/papeterie.css" rel="stylesheet" type="text/css" />
    <script src="dist/js/jquery-3.4.1.js"></script>
    <script src="dist/js/bootstrap.js"></script>
</head>

<body>
    <?php
    require '_entete.php';
    require '_nav.php';
    ?>
    <main class="container">
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
            }?>
        <p class="h2">Identifiez vous</p>
        <form method="post" action="connect.php">
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
    require '_footer.php';
    ?>
</body>

</html>