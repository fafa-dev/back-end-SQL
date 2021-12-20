<?php

class Article{

    private $id;
    private $libelle;
    private $nomimage;
    private $prix;

    public function __construct($libelle="", $nomimage="", $prix=0.0)
    {
        $this->id = null;
        $this->libelle = $libelle;// $this->libelle = strtoupper($libelle); pour que le com se met en majuscule 
        $this->nomimage = $nomimage;
        $this->prix= $prix;

    }

    public function getId(){

        return $this->id;
    }

    public function getlibelle(){

        return $this->libelle;
    }

    public function getnomimage(){

        return $this->nomimage;
    }

    public function getprix(){

        return $this->prix;
    }

}