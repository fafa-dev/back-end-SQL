<main class="container">
            <h2>Liste des articles de la catégorie <?= $cat; ?></h2>
            <table class="table table-bordered">
                <tbody id="ligne">
                    <tr>
                        <th class="text-center w-10">REFERENCE</th>
                        <th class="w-60">DESCRIPTION</th>
                        <th class="text-center w-10">PRIX<br>UNITAIRE</th>
                        <th class="text-center w-10">QUANTITE</th>
                        <th class="text-center w-10">AJOUTER<br>AU PANIER</th>
                    </tr>
                    <?php

 //                       $articles = getAllArticleByCategorie($cat);
                        foreach($articles as $article) {

                            echo '<tr>';
                            echo '<td class="text-center">'.$article['code_art'].'</td>';
                            echo '<td>'.$article['libelle_art'].'</td>';
                            echo '<td class="prix text-center">'.$article['prix_ht_art'].'</td>';
                            echo '<td class="text-center"><input type="number" value="0" min="0" /></td>';
                            echo '<td class="text-center"></td>';
                            echo '</tr>';
    
                        }
                    ?>
                </tbody>
            </table>
</main>