<?php



//pour recuperer les donné de la base de donné on a mis un fetchClass dans le getelementbycate 
class Article{

    private int $id_art;
    private string $libelle_art;
    private string $code_art;
    private float $prix_ht_art;
    private int $promo_art;

    public function __construct(int $idArt= 0, string $libelleArt ="", string $codeArt ="", float $prixHtArt=0.0, int $promoArt=0)
    {
        $this->id_art = $idArt;
        $this->libelle_art = $libelleArt;
        $this->code_art = $codeArt;
        $this->prix_ht_art = $prixHtArt;
        $this->promo_art = $promoArt;
//maintenant ces objet doivent apparaitre dans la vue en faisant les get car cest en privé 
    }

    public function getIdArt(){
        return $this -> id_art;
    }

    public function getlibArt(){
        return $this -> libelle_art;
    }

    public function getcode(){
        return $this -> code_art;
    }

    public function getPrixHt(){
        return $this -> prix_ht_art;
    }

    public function getPromoArt(){
        return  $this ->promo_art;
    }


  
}