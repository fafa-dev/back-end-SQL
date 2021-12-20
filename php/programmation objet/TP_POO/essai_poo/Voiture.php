<?php

class Voiture extends Vehicule {

    private $nbrPorte;

    public function __construct(string $marque, string $energie, $porte, int $ch = 10) {
     
        parent::__construct($marque, $energie, $ch);
        $this->nbrPorte = $porte;

    }

    public function seDeplacer() {
        echo 'je roule';
    }


    public function __toString() {
        
        $info = parent::__toString();
        $info .= "\nj'ai ".$this->nbrPorte." portes";
        return $info;
    }
}