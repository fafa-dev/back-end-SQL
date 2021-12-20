<?php
$dsn = 'mysql:host=localhost;dbname=papeterie;charset=utf8';
$userName = 'root';
$password = '';
try {
    $refPdo = new PDO($dsn, $userName, $password);
} catch (PDOException $err) {
    header('Location: erreur.php');
    exit();
}

function getAllArticleByCategorie($categ){

    global $refPdo;

    $sql = 'SELECT * FROM articles NATURAL JOIN categories WHERE libelle_cat=:cat;';
    $stat_article = $refPdo->prepare($sql);
    $stat_article->bindParam(':cat', $categ, PDO::PARAM_STR);
    $stat_article->execute();
    $articles = $stat_article->fetchAll(PDO::FETCH_ASSOC);

    return $articles;
}

function getUserByLogin($log){

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