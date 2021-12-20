<?php
try{
$dbConnect = new PDO('mysql:host=localhost;dbname=papeterie;charset=utf8', 'root', '');
$dbConnect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// toujours mettre le set attribute

}catch(PDOException $erreur){// mettre l'eception sur le catch et lui attribuer une variable

    header('Location: erreur.php');//lenvoyer vers une page ou l'on a mis un message d'erreur
    exit();
}


function getALLArticle($categorie){

    global $dbConnect; // rendre la varable dbconnect en variable GLOBAL cette variable se trouve dans le premier try/catch

        // methode query 
        // $sql = "SELECT * FROM articles NATURAL JOIN categories where libelle_cat = '$categorie'";
        // $stat_articles = $dbConnect->query($sql);
        // $art = $stat_articles->fetchAll(PDO::FETCH_ASSOC);

        //requete preparer 
        $sql = "SELECT * FROM articles NATURAL JOIN categories where libelle_cat =:cat;"; // :cat est un nommé de libelle_cat. cest ce quon utilisera dans bindparam
        $stat_articles = $dbConnect->prepare($sql);
        $stat_articles -> bindParam(':cat', $categorie, PDO::PARAM_STR); //categorie est dans les parametre de la fonction
        $stat_articles -> execute();
        $art = $stat_articles->fetchAll(PDO::FETCH_ASSOC);
        
     return $art;
        
        



}




function getLoginBysql($log){ //nous allons faire pour le login
    global $dbConnect;

    global $refPdo;

    $sql = 'SELECT * FROM user WHERE login=:ident';
    $stat_user = $refPdo->prepare($sql);
    $stat_user->bindParam(':ident', $log, PDO::PARAM_STR);
    $stat_user->execute();

   
    if ($stat_user->rowCount() == 1) {
        // comparer le $psw avec le mot de passe de la base de données
        $user = $stat_user->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
    return false;



}