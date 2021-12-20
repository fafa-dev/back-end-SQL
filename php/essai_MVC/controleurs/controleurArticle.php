<?php

require_once 'controleurs/controleur.php';



class ControleurArticle extends controleur{

    public function execute($action){

        switch ($action) {
            case 'liste':
                require 'modeles/ModeleArticle.php';
                $model = new ModeleArticle(); // on va chercher le fichier ou la fonction listearticle es déclaré 
                
                $param['articles']= $model->listeAllArticle();
                
                $this->creervue('liste', $param);
                break;

            case 'nouvelArticle':
                $this->creervue('form_article');
                break;

            case 'insertArticle':
                require 'modeles/ModeleArticle.php';
                $model = new ModeleArticle();
                $model->nouvelArticle();
                $this->creervue('form_article');
                break;
            
            default:
                # code...
                break;
        }
        
        //require 'vues/template.php';

    }


}