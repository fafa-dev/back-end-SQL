<?php
session_start();



//connexion a la base
$sdbConnect = new PDO('mysql:host=localhost;dbname=demo_personne;charset=utf8', 'root', '');

$login = $_POST['login'];

//crrer un ordre sql
$sql ="SELECT * FROM personne WHERE nom='$login'";
//var_dump($sql);

$stat_pers = $sdbConnect ->query($sql); //lui donner la methode query  consiste à créer l’ordre Sql simple sous forme d’une chaine de caractères puis de l’exécuter par la méthode « query() »
// var_dump($stat_pers);
$pers = $stat_pers -> fetch(); //avoir un tableau associatif et numerique
var_dump($pers);




//si login bon enregistrement
// $_SESSION['user'] = $login;

// header('Location: index.php');