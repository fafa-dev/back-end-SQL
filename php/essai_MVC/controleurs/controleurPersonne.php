<?php

require_once 'controleurs/controleur.php';
class controleurPersonne extends controleur{


    public function execute($action){

        switch ($action) {
            case 'login':
                require 'modeles/modelePersonne.php';
                $model = new modelPersonne();
                try{
                $model->login();
                $this->creervue('home');
                } catch (Exception $e) {
                $param = ['erreur'=> $e->getMessage()];
                $this->creervue('form_login', $param);
                }
                break;
            case 'connexion':
                $erreur = '';
                $vue = 'form_login';
                $param=['erreur' =>''];
                $this->creervue('form_login', $param);
                break;

            default:
                # code...
                break;

        }
    }
}
