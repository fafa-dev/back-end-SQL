<?php

class Parc {

    private $liste;

    public function __construct() {
        $this->liste = [];
    }

    public function addVehicule(Vehicule $vehicule) {

        array_push($this->liste, $vehicule);
    }

    public function listeVehicule() {

        foreach ($this->liste as $vehicule) {
            echo $vehicule;
            echo "\n";
            $vehicule->seDeplacer();
            echo "\n";
        }

    }
}