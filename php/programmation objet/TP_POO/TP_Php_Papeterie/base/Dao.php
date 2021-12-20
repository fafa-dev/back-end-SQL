<?php
require 'entites/Article.php';
class Dao
{

    private $refPdo;

    public function __construct()
    {
        $this->refPdo = $this->connexion();
    }

    private function connexion()
    {
        $dsn = 'mysql:host=localhost;dbname=papeterie;charset=utf8';
        $userName = 'root';
        $password = '';
        try {
            return new PDO($dsn, $userName, $password);
        } catch (PDOException $err) {
            throw new Exception('Site momentanément indisponible');
            exit();
        }
    }

    public function getAllArticleByCategorie($categ)
    {

       // $refPdo = $this->connexion();

        $sql = 'SELECT * FROM articles NATURAL JOIN categories WHERE libelle_cat=:cat;';
        $stat_article = $this->refPdo->prepare($sql);
        $stat_article->bindParam(':cat', $categ, PDO::PARAM_STR);
        $stat_article->execute();
        $stat_article->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Article');
        $articles = $stat_article->fetchAll();
        //var_dump($articles);
        //die();
        return $articles;
    }

    public function getUserByLogin($log)
    {

        //$refPdo =  $this->connexion();

        $sql = 'SELECT * FROM users WHERE login=:ident';
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

    public function setNewUser($user)
    {
        //$refPdo =  $this->connexion();

        $sql = 'INSERT INTO users VALUES (null, :login, :psw, :nom, :prenom, :role);';
        $stat_user = $this->refPdo->prepare($sql);

        $stat_user->bindParam(':nom', $user['nom'], PDO::PARAM_STR);
        $stat_user->bindParam(':prenom', $user['prenom'], PDO::PARAM_STR);
        $stat_user->bindParam(':login', $user['login'], PDO::PARAM_STR);
        $psw = password_hash($user['psw'], PASSWORD_DEFAULT);
        $stat_user->bindParam(':psw', $psw, PDO::PARAM_STR);
        $stat_user->bindParam(':role', $user['role'], PDO::PARAM_STR);
        try {
            $stat_user->execute();
        } catch (PDOException $pdoErr) {
            throw new Exception('Login déjà existant !');
        }
    }
}
