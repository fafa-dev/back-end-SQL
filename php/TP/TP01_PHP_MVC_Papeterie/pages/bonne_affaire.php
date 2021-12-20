<?php
    session_start();    
    $page = 'bonnes_affaires';
?>
<!DOCTYPE html>
<!--
 * @author Didier Bonneau
 * @copyright (c) Afpa, DWWM
 * @version 1.0 du 01/04/2019
 * Fichier principal de l'application TP_Papeterie
 -->
<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title>
            210_00_TP_Papeterie DWWM
        </title>
        <!-- Bootstrap core CSS -->
        <link href="/dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="/css/papeterie.css" rel="stylesheet" type="text/css"/>
        <script src="/dist/js/jquery-3.4.1.js"></script>
        <script src="/dist/js/bootstrap.js"></script>

    </head>
    <body>
        <div class='wrap'>
            <?php
                include '_entete.php';
                include '_nav.php';
            ?>
            <main class="container">
                <p class="h2">page bonnes affaires en construction</p>
            </main>
        </div>
        <?php
            include '_pied.php';
        ?>
    </body>
</html>
