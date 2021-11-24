<?php
session_start();
$login = $_POST['nom'];


//si login bon 

$_SESSION['user'] = $login;
header('location : index.php');