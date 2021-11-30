


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

                <?php //balise php qui va conroler le mdp et le login ainsi que la methode utiliser (post get) du formulaire

                if($_SERVER['REQUEST_METHOD']== 'POST'){  //condition pour savoir si on passe par la methode post
                // session_start();

                $refPdo = new PDO('mysql:host=localhost;dbname=papeterie', 'root','');


                $login= $_POST['login'];
                $pass = $_POST['mdp'];
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $status = $_POST ['role'];



                // $name = "SELECT * FROM user WHERE nom ='$login'";
                $name = "INSERT INTO  user  (login, psw, nom, prenom, role) VALUES ('$login', '$pass',  '$nom', '$prenom', '$status')";


                var_dump($name);
                $stat_pers = $refPdo ->query($name);


                }
                
                  

            
                ?>
            <main class="container">

                            <form action="creer.php" method="post">
                                            
                                            <label for="nom">nom</label>
                                            <input type="text" name="nom">
                                            <br><br>
                                            <label for="prenom">prenom</label>
                                            <input type="text" name="prenom">
                                            <br><br>
                                            <label for="role">status</label>
                                            <input type="text" name="role">
                                            <br><br>
                                            <label for="login">login</label>
                                            <input type="text" name="login">
                                            <br><br>
                                            <label for="psw">mot de passe</label>
                                            <input type="password" name="mdp">
                                            <br><br>

  
                                            <button type="submit" name="boutton">envoyer</button>
                                </form>




            </main>
        </div>


          <?php
            require_once 'footer.php';
        ?>
    </body>

</html>