<?php
    session_start();
    $page = 'accueil';
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
        <link href="dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/papeterie.css" rel="stylesheet" type="text/css"/>
        <script src="dist/js/jquery-3.4.1.js"></script>
        <script src="dist/js/bootstrap.js"></script>
    </head>
    <body>
        <?php
        require '_entete.php';
        require '_nav.php';
        ?>
        <main class="container">
            <p class="h2">Bienvenue sur le site de la Papeterie du centre</p>
        </main>
        <?php
        require '_pied.php';
        ?>
    </body>
</html>
