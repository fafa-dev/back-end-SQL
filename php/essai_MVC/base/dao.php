<?php



class Dao{


        private $dbConnect;


        public function __construct()
        {
            $this->dbConnect = new PDO('mysql:host=localhost;dbname=demo_personne;charset=utf8', 'root', '');
            $this->dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        }



        public function getPersonneByLogin($login) {

            

            $sql = 'SELECT * FROM personne WHERE nom = \'' . $login . '\'';

            $stat_pers = $this->dbConnect->query($sql);

            if ($stat_pers->rowCount() == 1) {
                $pers = $stat_pers->fetch(PDO::FETCH_ASSOC);
                return $pers;
            } else {
                //return false;
                $err = new Exception('Login incorrect');
                throw $err;
            }
        }

        public function getAllArticle(){

            

            $sql = 'SELECT id_art as id, libelle_art as libelle, photo as nomimage, prix_art as prix FROM articles';
            $stat_articles = $this->dbConnect->query($sql);
            $stat_articles->setFetchMode(PDO:: FETCH_CLASS| PDO::FETCH_PROPS_LATE, 'Article'); //il faut qu dans article tout les parametre du constructeur =''
            $arts = $stat_articles->fetchAll();

            return $arts;
        }

        public function insertArticle(Article $article) { //(on defini que cest la class article et ensuite on met la variable )


            $sql = 'INSERT INTO articles VALUES (null, :libelle, :photo, :prix );';
            $stat_art =  $this->dbConnect->prepare($sql);

            $libelle = $article->getlibelle();
            $photo = $article->getnomimage();
            $prix =$article ->getprix();

            $stat_art->bindParam(':libelle', $libelle );
            $stat_art->bindParam(':photo', $photo );
            $stat_art->bindParam(':prix', $prix);

            $stat_art->execute();

        }

}