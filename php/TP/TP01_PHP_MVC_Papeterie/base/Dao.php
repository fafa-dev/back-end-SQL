<?php
require 'entites/article.php';



class Dao 
{

    private $refPdo;

    public function __construct()
    {
        $this->refPdo = $this->connexionbase();
    }
//nous avons fais l'appel de la base de donné dans une fonction avec un return new pdo cela nous evite un global $refPdo
private function connexionbase(){
    $dsn = 'mysql:host=localhost;dbname=papeterie;charset=utf8';
    $userName = 'root';
    $password = '';

    try {
        return new PDO($dsn, $userName, $password);
    } catch (PDOException $err) {
        throw new Exception('Site momentannément indisponible');//relever lexception mettre le message erreur quon veut 
        exit();
    }

}
public function getAllArticleByCategorie($categ){

    //$refPdo =$this->connexionbase();

    $sql = 'SELECT * FROM articles NATURAL JOIN categories WHERE libelle_cat=:cat;';
    $stat_article = $this->refPdo->prepare($sql);
    $stat_article->bindParam(':cat', $categ, PDO::PARAM_STR);
    $stat_article->execute();
    $articles = $stat_article->fetchAll(PDO::FETCH_CLASS, 'Article');
    var_dump($articles);
    die();

    return $articles;
}

public function getUserByLogin($log){

   // $refPdo =$this->connexionbase();

    $sql = 'SELECT * FROM user WHERE login=:ident';
    $stat_user = $this->refPdo->prepare($sql);
    $stat_user->bindParam(':ident', $log, PDO::PARAM_STR);
    $stat_user->execute();

    if ($stat_user->rowCount() == 1) {
        // comparer le $psw avec le mot de passe de la base de données
        $user = $stat_user->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
    return false;
}

public function setnewuser($user){

     //$refPdo =$this->connexionbase();

    $sql = 'INSERT INTO user VALUES (null, :login, :psw, :nom, :prenom, :role);';
    $stat_user = $this->refPdo->prepare($sql);

    $stat_user->bindParam(':nom', $user['nom'], PDO::PARAM_STR);
    $stat_user->bindParam(':prenom', $user['prenom'], PDO::PARAM_STR);
    $stat_user->bindParam(':login', $user['login'], PDO::PARAM_STR);
    $psw = password_hash($user['psw'], PASSWORD_DEFAULT);
    $stat_user->bindParam(':psw', $psw, PDO::PARAM_STR);
    $stat_user->bindParam(':role', $user['role'], PDO::PARAM_STR);

        try{
            $stat_user->execute();
        }catch(PDOException $pdoErr){
            throw new Exception('login deja existant');
        }


}
}