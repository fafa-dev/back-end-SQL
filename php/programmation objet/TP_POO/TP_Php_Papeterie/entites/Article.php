<?php

class Article {

    private int $id_art;
    private string $libelle_art;
    private string $code_art;
    private float $prix_ht_art;
    private int $promo_art;

    public function __construct(int $id =  0, string $libelle = '', string $code = '', float $prixHt = 0.0, int $promo = 0)
    {
        $this->id_art = $id;
        $this->libelle_art = $libelle;
        $this->code_art = $code;
        $this->prix_ht_art = $prixHt;
        $this->promo_art = $promo;
    }

    public function getIdArt(){
        return $this->id_art;
    }
    public function getLibelleArt(){
        return $this->libelle_art;
    }
    public function getCodeArt(){
        return $this->code_art;
    }
    public function getPrixHtArt(){
        return $this->prix_ht_art;
    }
    public function getPromoArt(){
        return $this->promo_art;
    }

}