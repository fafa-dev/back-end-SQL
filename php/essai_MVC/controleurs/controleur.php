<?php


abstract class controleur{ //maintenant il faut que dans les page ou on lutilise on met extends controleur (voir page controleurArticle)

    abstract protected function execute($action);

    public function creervue($vue, $param =[]){

        extract($param);
        require 'vues/template.php';

    }



}