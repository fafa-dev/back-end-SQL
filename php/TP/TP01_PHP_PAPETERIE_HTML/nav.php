<nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <a class="navbar-brand active" href="index.php">Accueil</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <!-- Dropdown -->
                        <li class="nav-item dropdown <?php if (substr($page, 0, 4)== 'prod'){echo ' active';}?>">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Les Produits</a>
                            <div class="dropdown-menu bg-secondary">
                                <a class="dropdown-item" href="prod_papeterie.php" <?php if($page =='prod_papeterie'){ echo 'style="display:none"';}?>>Papeterie</a>
                                <a class="dropdown-item" href="prod_ecriture.php"<?php if($page =='prod_ecriture'){ echo 'style="display:none"';}?>>Ecriture</a>
                                <a class="dropdown-item" href="accessoir.php" <?php if($page == 'prod_acces'){ echo 'style="display:none"';}?>>Accessoires</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($page== 'bA'){echo ' active';}?>" href="bonne_affaires.php">Les Bonnes affaires</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($page== 'basket'){echo ' active';}?>" href="basket.php">Votre panier</a>
                        </li>
                    </ul>
                </div>
        
</nav>
