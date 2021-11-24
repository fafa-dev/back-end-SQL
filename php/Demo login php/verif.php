<?php
session_start();

$login = $_POST['login'];

//si login bon enregistrement
$_SESSION['user'] = $login;

header('Location: index.php');