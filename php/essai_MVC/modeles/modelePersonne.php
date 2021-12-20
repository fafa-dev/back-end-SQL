<?php
require 'base/dao.php';

class modelPersonne{

    public function login()
    {

            $login = $_POST['login'];

        
                $dao = new Dao();
                $personne = $dao->getPersonneByLogin($login);

                $_SESSION['user'] = $personne['nom'];
                //$vue = 'home';
    }
}