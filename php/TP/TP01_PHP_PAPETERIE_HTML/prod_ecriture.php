<?php
$page = 'prod_ecriture';

?>

<!DOCTYPE html>

<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title>
            210_00_TP_Papeterie DWWM
        </title>
        <!-- Bootstrap core CSS -->
        <link href="dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/papeterie.css" rel="stylesheet" type="text/css"/>
        <script src="dist/js/jquery-3.4.1.js"></script>
        <script src="dist/js/bootstrap.js"></script>

    </head>
    <body>
        <div class='wrap'>
            <?php
            
            require_once 'entete.php';
            require_once 'nav.php';
            ?>
          
            <main class="container">
                <h2>Liste des produits de la catégorie écriture</h2>
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
                            <td>Stylos</td>
                            <td class="prix text-center">1.50</td>
                            <td class="text-center"><input type="number" value="0" min="0" /></td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">0010</td>
                            <td>Gommes</td>
                            <td class="prix text-center">0.45</td>
                            <td class="text-center"><input type="number" value="0" min="0" /></td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="text-center">0003</td>
                            <td>Boîte de 10 feutres</td>
                            <td class="prix text-center">4.50</td>
                            <td class="text-center"><input type="number" value="0" min="0" /></td>
                            <td class="text-center"></td>
                        </tr>
                    </tbody>
                </table>
            </main>   

            
            <?php
            require_once 'footer.php';
        ?>
    </body>
</html>

       
