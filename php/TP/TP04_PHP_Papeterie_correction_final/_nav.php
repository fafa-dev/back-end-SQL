<!--
 * @author Didier Bonneau
 * @copyright (c) Afpa, DWWM
 * @version 1.0 du 01/04/2019
 * Fichier du menu de l'application TP_Papeterie
 */
-->
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="index.php">Accueil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle<?php if (substr($page, 0, 5) == 'prod_') {echo ' active';} ?>" href="#" id="navbardrop" data-toggle="dropdown">Les Produits</a>
                <div class="dropdown-menu bg-secondary">
                    <a class="dropdown-item"<?php if ($page == 'prod_papeterie') {echo ' style="display:none"';} ?> href="prod_papeterie.php">Papeterie</a>
                    <a class="dropdown-item"<?php if ($page == 'prod_ecriture') {echo ' style="display:none"';} ?> href="prod_ecriture.php">Ecriture</a>
                    <a class="dropdown-item"<?php if ($page == 'prod_accessoir') {echo ' style="display:none"';} ?> href="#">Accessoires</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link<?php if ($page == 'bonnes_affaires') {echo ' active';} ?>" href="#">Les Bonnes affaires</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?php if ($page == 'panier') {echo ' active';} ?> disabled" href="#">Votre panier</a>
            </li>
        </ul>
    </div>
</nav>
