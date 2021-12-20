<section>
    <h3>Liste des articles</h3>
    <br>
    <table>
        <tr>
            <th>Photo</th>
            <th>Code article</th>
            <th>Libellé</th>
            <th>prix unitaire</th>
        </tr>
        <?php

        foreach ($articles as $article) {//une fois quon a modifier la DAO on modifier ici avec les getteur 
            //var_dump($article);
            echo '<tr>';
            echo '<td><img src="/upload/'.$article->getnomimage().'"></td>';
            echo '<td>' . $article->getId() . '</td>';
            echo '<td>' . $article ->getlibelle() . '</td>';
            echo '<td>' . $article->getprix() . '</td>';
            echo '</tr>';
        }
        ?>
    </table>

</section>