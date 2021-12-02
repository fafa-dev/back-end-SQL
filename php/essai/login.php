<?php
session_start();
$page = 'login';
$erreur = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // conexion à la base
    $dbConnect = new PDO('mysql:host=localhost;dbname=demo_personne;charset=utf8', 'root', '');

    $login = $_POST['login'];

    $sql = 'SELECT * FROM personne WHERE nom = \'' . $login . '\'';

    $stat_pers = $dbConnect->query($sql);

    //si login bon enregistrement en base
    if ($stat_pers->rowCount() == 1) {
        $pers = $stat_pers->fetch();
        $_SESSION['user'] = $login;
        header('Location: index.php');

        exit();
    }
    $erreur = 'Erreur de login';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        include 'inc/entete.php';
    ?>
    <section>
        <h3>Identifiez vous</h3>
        <form method="post" action="login.php">
            <?php
                if ($erreur != '') {
                    echo '<h5>'.$erreur.'</h5>';
                }
            ?>
            <label>Votre login </label>
            <input type="text" name="login">
            <button type="submit">Valider</button>
        </form>
    </section>
</body>

</html>
