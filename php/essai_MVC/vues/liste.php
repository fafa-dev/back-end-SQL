<section>
    <h3>Liste des articles</h3>
    <br>
    <table>
        <tr>
        <th>photo</th>
            <th>Code article</th>
            <th>Libellé</th>
            <th>prix unitaire</th>
        </tr>
        <?php

        foreach ($articles as $article) {
            //var_dump($article);
            echo '<tr>';
            echo '<td> <img src="/upload/'.$article['photo'].'"</td>';
            echo '<td>' . $article['id_art'] . '</td>';
            echo '<td>' . $article['libelle_art'] . '</td>';
            echo '<td>' . $article['prix_art'] . '</td>';
            echo '</tr>';
        }
        ?>
    </table>

</section>