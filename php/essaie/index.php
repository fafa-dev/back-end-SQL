<?php 
    $page = 'accueil'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="deco.css">
    <title>Document</title>
    
</head>
<body>
    <?php 
        $page = 'home.php';
        include 'inc/entete.php';
        
    ?>


    <section>

        <?php

        include $page
        
        ?>
       
    </section>


</body>
</html>