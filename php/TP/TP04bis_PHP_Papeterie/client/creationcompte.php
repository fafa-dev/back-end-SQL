<?php
    session_start();
    $page = 'creationcompte';
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
        <link href="/dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="/css/papeterie.css" rel="stylesheet" type="text/css"/>
        <script src="/dist/js/jquery-3.4.1.js"></script>
        <script src="/dist/js/bootstrap.js"></script>
    </head>
    <body>
        <?php
        require '../pages/_entete.php';
        require '../pages/_nav.php';
        ?>
        <main class="container">
            <p class="h2">creation de votre compte</p>
            <br><br><br>

            <form method="post" action="register.php">

            <div class="mb-3">
                <label for="id_nom" class="form-label">Votre nom</label>
                <input type="text"  name="nom" class="form-control" id="id_nom">
            </div>
            <div class="mb-3">
                <label for="id_prenom" class="form-label">Votre prenom</label>
                <input type="text"  name="prenom" class="form-control" id="id_prenom">
            </div>
            <div class="mb-3">
                <label for="id_login" class="form-label">Votre login</label>
                <input type="text"  name="login" class="form-control" id="id_login">
            </div>
            <div class="mb-3">
                <label for="id_psw" class="form-label">Votre mot de passe</label>
                <input type="password" name="psw" class="form-control" id="id_psw">
            </div>
            
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>

        </main>
        <br><br><br>
        <?php
        require '../pages/_pied.php';
        ?>
    </body>
</html>
