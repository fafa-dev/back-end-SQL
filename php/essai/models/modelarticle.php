<?php

require 'base/dao.php';


function listeAllArticle(){

  $arts = getAllArticle();

  return $arts;

    

}