<?php
require 'base/dao.php';


function listeAllArticle() {

    $arts = getAllArticle();

    return $arts;

}

function nouvelArticle(){

    
    $libelle = filter_input(INPUT_POST, 'libelle');
    $prix = filter_input(INPUT_POST, 'prix');
    $nom_photo = $_FILES['photo']['name']; //nom du fichier que la personne a donné 
    $param =explode('.',$nom_photo); //separe moi le nom de photo 
    $nom_photo = uniqid().'.'.$param[1] ;//on reafect le nom photo on lui donne un nom unique  [1] = premier element du tableau param car le point est 0 utiliser array_pop($param) prend le dernier ellement du tableau et suprime les autre

    insertArticle($libelle, $nom_photo, $prix);
    
    move_uploaded_file($_FILES['photo']['tmp_name'], 'upload/'.$nom_photo);

    
}