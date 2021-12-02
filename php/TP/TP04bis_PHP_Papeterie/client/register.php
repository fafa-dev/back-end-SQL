<?php

$client = [
    'nom'=>filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS),
    'prenom'=>filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_SPECIAL_CHARS),
    'login'=> filter_input(INPUT_POST, 'login', FILTER_SANITIZE_SPECIAL_CHARS),
     'psw' =>filter_input(INPUT_POST, 'psw', FILTER_SANITIZE_SPECIAL_CHARS),
     'role'=>'client'
];


$dsn ='mysql:host=localhost;dbname=papeterie;charset=utf8';
$userName = 'root';
$password = '';


$refPdo = new PDO($dsn, $userName, $password); 


$sql = 'INSERT INTO  user VALUES (null, :login, :psw, :nom, :prenom, :role);';//mettre dans lordre des colones de la base de donnée.

$stat_user = $refPdo->prepare($sql);


$stat_user->bindParam(':nom',$client['nom'], PDO::PARAM_STR);
$stat_user->bindParam(':prenom',$client['prenom'], PDO::PARAM_STR);
$stat_user->bindParam(':login',$client['login'], PDO::PARAM_STR);
$stat_user->bindParam(':role',$client['role'], PDO::PARAM_STR);


$password = password_hash($client['psw'],PASSWORD_DEFAULT); //crypter notre mdp avant

$stat_user->bindParam(':psw',$password, PDO::PARAM_STR);


$stat_user->execute();

header('Location: /index.php');

    