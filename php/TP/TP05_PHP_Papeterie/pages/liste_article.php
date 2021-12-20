<?php
require '../base/dao.php';
session_start();
    $page = 'liste_article';
    $cat = filter_input(INPUT_GET, 'cat', FILTER_SANITIZE_STRING);
?>
<!--
/**
 * @author Didier Bonneau
 * @copyright (c) Afpa, DWWM
 * @version 1.0 du 01/04/2019
 * Fichier d'affichage des produits de la catégorie Papeterie
 */
-->
<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title>
            TP_PHP_Papeterie DWWM
        </title>
        <link href="/dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="/css/papeterie.css" rel="stylesheet" type="text/css"/>
       <style>
            input[type=number] {
                width: 45px;
            }
        </style>
        <script src="/dist/js/jquery-3.4.1.js"></script>
        <script src="/dist/js/bootstrap.js"></script>
    </head>
    <body>
        <?php
        require '_entete.php';
        require '_nav.php';
        ?>
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
//                        $dsn ='mysql:host=localhost;dbname=papeterie;charset=utf8';
//                        $userName = 'root';
//                        $password = '';
//                        $refPdo = new PDO($dsn, $userName, $password); 
                        // interroger la base de données avec la categorie
                        $articles = getAllArticleByCategorie($cat);
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
        <?php
        require '_pied.php';
        ?>
    </body>
</html>
