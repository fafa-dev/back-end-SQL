<?php
        

switch ($action) {
    case 'liste':
        require 'modeles/modeleArticle.php';
        $articles = listeAllArticle();
        $vue = 'liste';
        break;

    case 'nouvelArticle':
        $vue = 'form_article';
        break;

    case 'insertArticle':
        require 'modeles/modeleArticle.php';
        nouvelArticle();
        $vue='form_article';
        break;
    
    default:
        # code...
        break;
}