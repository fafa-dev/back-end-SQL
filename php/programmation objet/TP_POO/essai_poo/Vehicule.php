<?php
declare(strict_types = 1);

abstract class Vehicule {

    private const ENERGIE = 'essence';

    private string $energie;
    private string $marque;
    private int $nbrCh;
    private static $nbrVehicule = 0;

    public function __construct(string $marque, string $energie, int $ch = 10) {

        $this->energie = $energie;
        //$this->marque = strtoupper($marque);
        $this->setMarque($marque);
        $this->nbrCh = $ch;

        self::$nbrVehicule++;
    }

    // public function setEnergie($energ) {
    //     $this->energie = $energ;
    // }

    public function setMarque($marque) {
        $this->marque = strtoupper($marque);
    }

    public function getEnergie() : string {
        return $this->energie;
    }

    public function getMarque() {
        return $this->marque;
    }

    // public function info() {
    //     $str = 'Je suis un véhicule '.$this->energie.' de marque '.$this->marque;
    //     $str .= ' j\'ai '.$this->nbrCh.' chevaux';
    //     return $str;
    // }

    public static function nombreDeVehicule(){
        return self::$nbrVehicule;
    }

    public function __toString() {
        $str = 'Je suis un véhicule '.$this->energie.' de marque '.$this->marque;
        $str .= ' j\'ai '.$this->nbrCh.' chevaux';
        return $str;
    }

    abstract public function seDeplacer();

}
