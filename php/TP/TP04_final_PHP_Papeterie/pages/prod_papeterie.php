<?php
require 'dao.php';
session_start();
    $page = 'prod_papeterie';
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
            <h2>Liste des produits de la catégorie papeterie</h2>
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
                    $articles = getALLArticle('papeterie'); // nous attribuons cette fonction a la variable article
                    
                     foreach($articles as $article){
       
                        echo'<tr>'; // nous creeons un tableau 
                        echo '<td>'.$article['code_art'].'</td>';
                        echo '<td>'.$article['libelle_art'].'</td>';
                        echo '<td>'.$article['prix_ht_art'].'</td>';
                        echo '<td><input type="number" value="0" min="0"></td>';                    
                        echo '<td></td>';
                        echo'</tr>';
            
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
