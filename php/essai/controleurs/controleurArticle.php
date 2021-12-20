<?php






switch ($action) {
    case 'liste':
        require 'models/modelArticle.php';
        $articles = listeAllArticle(); 
        $vue ='liste';
        break;
    
    default:
        # code...
        break;
}