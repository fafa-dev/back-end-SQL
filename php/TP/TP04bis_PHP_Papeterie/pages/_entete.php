<!--
/**
 * @author Didier Bonneau
 * @copyright (c) Afpa, DWWM
 * @version 1.0 du 01/04/2019
 * Fichier d'entête de l'application TP_Papeterie
 */
-->
<?php
if (isset($_SESSION['nom'])) {
    $user = $_SESSION['nom'];
} else {
    $user = '';
}
?>
<header class="container-fluid bg-dark text-white">
    <div class="row">
        <div class="col-1">
            <img src="/images/logo_papeterie.png" alt="logo">
        </div>
        <div class="col-8">
            <h3>Papeterie du Centre</h3>
            <p>9 rue Marc Seguin<br>
                94000 Créteil<br>
                Tél : 01 23 45 67 89</p>
        </div>
        <div class="col-3">
            <?php
            if ($user === '') {
                echo '<span>Déjà client : <a href="/securite/login.php" class="btn btn-primary btn-sm">Identifiez-vous</a></span>
                    <br><br>
                    <span><a href="/client/creationcompte.php" class="btn btn-secondary btn-sm">Créer un compte</a></span>';
            } else {
                echo '<span><a href="/securite/deconnect.php" class="btn btn-primary btn-sm">déconnexion</a></span>';
            }
            ?>
            <br>
            <span class="badge badge-secondary">DATE : <?php echo date('d.m.Y') ?></span></p>
        </div>
    </div>
</header>