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

            <?php //balise php qui va conroler le mdp et le login ainsi que la methode utiliser (post get) du formulaire

                if($_SERVER['REQUEST_METHOD']== 'POST'){  //condition pour savoir si on passe par la methode post
                session_start();

                $refPdo = new PDO('mysql:host=localhost;dbname=papeterie;charset=utf8', 'root','');


               // $login= $_POST['login'];

                // $pass = $_POST['mdp'];

                $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_SPECIAL_CHARS);// permet de filter le login saisi (Methode, 'me nom dans le name', type de filtre (le filtre permet de justement filtrer ce que l'utilisateur ecris ))
                $pass = filter_input(INPUT_POST, 'mdp', FILTER_SANITIZE_SPECIAL_CHARS);
                                    //solution pour controler 
                // $stat_pers = $refPdo->prepare($name);//il envoi la requete sans la valeur (il prépare)
                // $stat_pers = bindParam( ':login', $login );
                // $stat_pers-> execute();
                //retirer la $stat_pers = $refPdo ->query($name); 
                // ajouter 
                // $name = "SELECT * FROM user WHERE nom ='$login'";$name = "SELECT * FROM user WHERE nom =:login";

                $name = "SELECT * FROM user WHERE nom = '$login'";

                
                $stat_pers = $refPdo ->query($name);
                
                
                // var_dump($pers['psw']);
                
                if($stat_pers ->rowCount()==1 ){ //voir si lutilisateur existe dans la base de donnée
                    $pers = $stat_pers->fetch(PDO::FETCH_ASSOC);//demandé le tbleau associatif

                if($_POST['login']== $pers['login'] && $_POST['mdp'] ==$pers['psw'] ){

                    $_SESSION['user'] = $login;
                    session_write_close();

                    header('Location: index.php');

                }else{
                    echo '<H2 style = "color:red">salut '.$login.' veuillez saisir le bon mdp</h2>';

                };
                }else{
                    echo 'utilisateur inconnu';
                }


               

                // if ($pass =='psw'){
                // $_SESSION['user'] = $login;
                // session_write_close();
                // header('Location: index.php');

                // }else {
                //     echo '<H2 style = "color:red">salut '.$login.' veuillez saisir le bon mdp</h2>';
                // }
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