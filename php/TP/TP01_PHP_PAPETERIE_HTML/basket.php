<?php
    $page = 'basket';
?>


<!DOCTYPE html>

<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title>
            210_00_TP_Papeterie DWWM
        </title>
        <!-- Bootstrap core CSS -->
        <link href="dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/papeterie.css" rel="stylesheet" type="text/css"/>
        <script src="dist/js/jquery-3.4.1.js"></script>
        <script src="dist/js/bootstrap.js"></script>

    </head>
    <body>
        <div class='wrap'>
            <?php
            
            require_once 'entete.php';
            require_once 'nav.php';
            ?>


            <main class="container">
            <h1>Votre panier est vide</h1>

            </main>
        </div>
        
        <?php
            require_once 'footer.php';
        ?>
    </body>
</html>
