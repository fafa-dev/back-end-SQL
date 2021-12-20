<?php
require 'base/dao.php';
require 'entites/Article.php';

class ModeleArticle{


    private $dao;

    public function __construct()
    {
        $this->dao = new Dao();
    }

    public function listeAllArticle() {

        $arts = $this->dao->getAllArticle();

        return $arts;

    }

    public function nouvelArticle() {
        //var_dump($_FILES);
        $libelle = filter_input(INPUT_POST, 'libelle');
        $prix = filter_input(INPUT_POST, 'prix');
        $nom_photo = $_FILES['photo']['name'];

        $article = new Article($libelle,$nom_photo, $prix);//dans le meme ordre que les parametre du constructeur

        $param = pathinfo($nom_photo); // fonction qui Retourne des informations sur un fichier
        $nom_photo = uniqid() . '.' . $param['extension'];

        $this->dao->insertArticle($article);//ensuite nous envoyons via la variable ensuite se rendre dans le DAO pour modifier la fonction insrtAticle 

        move_uploaded_file($_FILES['photo']['tmp_name'], 'upload/'.$nom_photo);

    }

}