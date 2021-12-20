<?php

require 'modeles/modelearticle.php';

switch ($action) {
    case 'liste':
        $cat = filter_input(INPUT_GET, 'cat');
        $articles = getAllArticle($cat);
        $vue ='article/liste';
        break;

    // case 'deconnect':
    //     logout();
    //     break;

    default:
        $erreur =""; //initialisation de la variable qui se trouve dans la page erreur
        $vue ='erreur';
        break;
}