<main class="container">
    <p class="h2">Identifiez vous</p>
    <form method="post" action="index.php?entite=user&action=login">
        <?php
        if ($erreur) {
            echo '<div class="alert alert-danger" role="alert">';
            echo $erreur;
            echo '</div>';
        }
        ?>
        <div class="mb-3">
            <label for="id_login" class="form-label">Votre login</label>
            <input type="text" value="<?= $login; ?>" name="login" class="form-control" id="id_login" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="id_psw" class="form-label">Votre mot de passe</label>
            <input type="password" name="psw" class="form-control" id="id_psw">
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
</main>