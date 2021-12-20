<section>
    <h3>Nouvel article</h3>
    <form method="post" enctype="multipart/form-data" action="index.php?entite=article&action=insertArticle">
        <label>Nom de l'article </label>
        <input type="text" name="libelle">
        <br><br>
        <label>Photo de l'article </label>
        <input type="file" name="photo">
        <br><br>
        <label>Prix de l'article </label>
        <input type="text" name="prix">
        <br><br>
        <button type="submit">Valider</button>
    </form>
</section>