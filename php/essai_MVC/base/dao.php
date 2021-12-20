<?php
//try {
    $dbConnect = new PDO('mysql:host=localhost;dbname=demo_personne;charset=utf8', 'root', '');
    $dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $erreur){

//     //header('Location: erreur.php');
//     $vue = 'erreur';
//     exit();
// }



function getPersonneByLogin($login) {

    global $dbConnect;

    $sql = 'SELECT * FROM personne WHERE nom = \'' . $login . '\'';

    $stat_pers = $dbConnect->query($sql);

    if ($stat_pers->rowCount() == 1) {
        $pers = $stat_pers->fetch(PDO::FETCH_ASSOC);
        return $pers;
    } else {
        //return false;
        $err = new Exception('Login incorrect');
        throw $err;
    }
}

function getAllArticle(){

    global $dbConnect;

    $sql = 'SELECT * FROM articles';
    $stat_articles = $dbConnect->query($sql);
    $arts = $stat_articles->fetchAll(PDO::FETCH_ASSOC);

    return $arts;
}


function insertArticle($nom_article, $image, $prix){
    global $dbConnect;

    $sql ='INSERT INTO articles VALUES(null, :libelle, :photo, :prix);';
    $stat_art =$dbConnect->prepare($sql);
    $stat_art ->bindParam(':libelle', $nom_article);
    $stat_art -> bindParam(':photo', $image);
    $stat_art -> bindParam(':prix', $prix);

    $stat_art->execute();



}