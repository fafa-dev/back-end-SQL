<?php
require 'Parc.php';
require 'Vehicule.php';
require 'Voiture.php';
require 'Bateau.php';

$garage = new Parc();

$voiture1 = new Voiture('Renault', 'essence', 4, 15);
$voiture2 = new Voiture('Renault', 'diesel',2);

$garage->addVehicule($voiture1);
$garage->addVehicule($voiture2);

$bateau1 = new Bateau('Jeanneau', 'essence', 1, 145);
$garage->addVehicule($bateau1);


//var_dump($voiture1);
// $voiture1->setEnergie('essence');
// $voiture1->setMarque('Renault');
// $voiture2->setEnergie('diesel');
// $voiture2->setMarque('Citroen');
//var_dump($voiture1);
// echo $voiture1->getEnergie();
// echo "\n";
// echo $voiture1->getMarque();
// echo "\n";
// echo $voiture2->getEnergie();
// echo "\n";
// echo $voiture2->getMarque();
// echo "\n";
//echo $voiture1->info();
echo "\n";
//echo $voiture2->info();

// echo $voiture1;
// echo "\n";
// echo $voiture2;
// echo "\n";
//echo Vehicule::nombreDeVehicule();

$garage->listeVehicule();
