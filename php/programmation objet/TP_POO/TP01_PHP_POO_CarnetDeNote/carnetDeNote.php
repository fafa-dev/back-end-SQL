<?php

require 'Note.php';
require 'Matiere.php';

echo "Entrer le libellé de la matière : ";
fscanf(STDIN, '%s', $libelle);
//var_dump($libelle);

$mat1 = new Matiere($libelle);

echo "\nentrer la valeur de la note : ";
fscanf(STDIN, '%d', $n);

while ($n != 99) {
    try {
        $n1 = new Note($n);
        $mat1->addNote($n1);
    } catch (Exception $erreur) {
        echo $erreur->getMessage();
    } catch (Error $erreur){
        echo 'Note non valide (valeur réel attendue)';
    }
    echo "\nentrer la valeur de la note : ";
    fscanf(STDIN, '%d', $n);

} 


// $mat1->addNote($n1);
// $n1 = new Note(5);
// $mat1->addNote($n1);
// $n1 = new Note(18);
// $mat1->addNote($n1);
// $n1 = new Note(10);
// $mat1->addNote($n1);
// $n1 = new Note(20);
// $mat1->addNote($n1);
// $n1 = new Note(12);
// $mat1->addNote($n1);
try {
$mat1->resultat();
} catch(Error $e) {
    echo 'Tableau vide ???';
}
//echo $mat1->moyenne();
