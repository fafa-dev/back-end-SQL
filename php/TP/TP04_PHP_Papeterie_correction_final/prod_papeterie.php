<?php
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
        <link href="dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/papeterie.css" rel="stylesheet" type="text/css"/>
       <style>
            input[type=number] {
                width: 45px;
            }
        </style>
        <script src="dist/js/jquery-3.4.1.js"></script>
        <script src="dist/js/bootstrap.js"></script>
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
                    <tr>
                        <td class="text-center">0019</td>
                        <td>Classeur à anneaux</td>
                        <td class="prix text-center">3.50</td>
                        <td class="text-center"><input type="number" value="0" min="0" /></td>
                        <td class="text-center"></td>
                    </tr>
                    <tr>
                        <td class="text-center">0010</td>
                        <td>Sous chemises</td>
                        <td class="prix text-center">1.45</td>
                        <td class="text-center"><input type="number" value="0" min="0" /></td>
                        <td class="text-center"></td>
                    </tr>
                    <tr>
                        <td class="text-center">0003</td>
                        <td>Couvertures transparentes pour dossiers</td>
                        <td class="prix text-center">4.50</td>
                        <td class="text-center"><input type="number" value="0" min="0" /></td>
                        <td class="text-center"></td>
                    </tr>
                </tbody>
            </table>
       </main>
        <?php
        require '_pied.php';
        ?>
    </body>
</html>
