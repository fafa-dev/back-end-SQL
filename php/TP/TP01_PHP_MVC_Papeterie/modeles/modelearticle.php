<?php
require 'base/dao.php';  

function getAllArticle($cat){
    $dbDao = new Dao ();
return $dbDao->getAllArticleByCategorie($cat);

}