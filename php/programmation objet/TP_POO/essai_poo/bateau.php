<?php

class Bateau extends Vehicule {

    private $nbrCoque;

    public function __construct(string $marque, string $energie, $coque, int $ch = 10) {
     
        parent::__construct($marque, $energie, $ch);
        $this->nbrCoque = $coque;

    }


    public function seDeplacer() {
        echo 'je navigue';
    }

    public function __toString() {
        
        $info = parent::__toString();
        $info .= "\nj'ai ".$this->nbrCoque." coques";
        return $info;
    }

}