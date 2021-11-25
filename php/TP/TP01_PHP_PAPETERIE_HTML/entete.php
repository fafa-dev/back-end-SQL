<header class="container-fluid bg-dark text-white">
                <div class="row">
                    <div class="col-1">
                        <img src="images/logo_papeterie.png" alt="logo">
                    </div>
                    <div class="col-8">
                        <h3>Papeterie du Centre</h3>
                        <p>9 rue Marc Seguin<br>
                            94000 Créteil<br>
                            Tél : 01 23 45 67 89</p>
                    </div>
                    <div class="col-3">

                        <?php
                        session_start();

                    

                        if(isset($_SESSION['user'])){
                           echo  '<span>Déjà client : <a href="deconnect.php" class="btn btn-primary btn-sm" >DECONNEXION</a></span>';
                        }else{
                            echo '<span>Déjà client : <a href="connect.php" class="btn btn-primary btn-sm" > Identifiez-vous </a></span>';
                        }session_write_close()
                        ?>

                        
                        
                        <br><br>
                        <span><a href="#" class="btn btn-secondary btn-sm">Créer un compte</a></span>
                        <br>
                        <span class="badge badge-secondary">DATE : 01-03-2013</span>
                        <?php session_start();
                            if(isset($_SESSION['user'])){
                                echo '<h1>Bienvenu a toi '.$_SESSION['user'].'</h1>';
                            }
                            session_write_close()
                        ?>
                        
                    </div>
                </div>
</header>

