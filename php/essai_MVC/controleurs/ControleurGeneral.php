<?php

class ControleurGeneral extends controleur{

    public function execute($action){
        $this->creervue('home');
    }
}