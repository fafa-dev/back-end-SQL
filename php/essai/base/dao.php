<?php
// try{
$dbConnect = new PDO('mysql:host=localhost;dbname=demo_personne;charset=utf8', 'root', '');
$dbConnect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// toujours mettre le set attribute

// }catch(PDOException $erreur){// mettre l'eception sur le catch et lui attribuer une variable

//    $vue ='home';//lenvoyer vers une page ou l'on a mis un message d'erreur
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
       // return false;

       $err = new Exception('login incorect'); // mettre une exception pour gerer le retrn false ce message sera afficher grce a getmessage() dans la page login
        throw $err; //permet d'attaper le $err
    }
}

function getAllArticle(){

    global $dbConnect;

    $sql = 'SELECT * FROM articles';
    $stat_articles = $dbConnect->query($sql);
    $arts = $stat_articles->fetchAll(PDO::FETCH_ASSOC);

    return $arts;
}