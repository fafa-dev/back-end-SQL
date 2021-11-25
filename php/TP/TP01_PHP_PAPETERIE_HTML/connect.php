<?php
    $page='connexion'
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

            <?php //balise php qui va conroler le mdp et le login ainsi que la methode utiliser (post get) dy formulaire

                if($_SERVER['REQUEST_METHOD']== 'POST'){  //condition pour savoir si on passe par la methode post
                session_start();

                $login= $_POST['login'];

                $pass = $_POST['mdp'];
                if ($pass =='psw'){
                $_SESSION['user'] = $login;
                session_write_close();
                header('Location: index.php');

                }else {
                    echo '<H2 style = "color:red">salut '.$login.' veuillez saisir le bon mdp</h2>';
                }
                }


            ?>  

            <form action="connect.php" method="post">
                <label for="login">identifiez vous</label>
                <input type="text" name="login">
                <br>
                <label for="mdp">mot de passe</label>
                <input type="password" name="mdp">
                <button type="submit" name="boutton">envoyer</button>
            </form>

            </main>
        </div>

        
 
        
        <?php
            require_once 'footer.php';
        ?>
    </body>
</html>






