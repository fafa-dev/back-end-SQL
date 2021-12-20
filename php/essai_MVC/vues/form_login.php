<section>
    <h3>Identifiez vous</h3>
    <form method="post" action="index.php?entite=personne&action=login">
        <?php
        if ($erreur != '') {
            echo '<h5>' . $erreur . '</h5>';
        }
        ?>
        <label>Votre login </label>
        <input type="text" name="login">
        <button type="submit">Valider</button>
    </form>
</section>