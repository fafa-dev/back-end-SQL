

<header>
        <h1>mon premier fichier php</h1>

        <h1>vous etes sur la page <?php echo $page; ?></h1>

        <?php

        session_start();
        if(isset($_SESSION['user'])){
                echo '<h1> bonjour '.$_SESSION['user'].'</h1>';
        }
        session_write_close();

        ?>
       
</header>

