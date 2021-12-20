<?php

class Matiere {

    private $libelle;
    private $listeNote;

    public function __construct(string $mat) {
        $this->libelle = $mat;
        $this->listeNote = [];
    }

    public function addNote(Note $note) {
        array_push($this->listeNote, $note);
    }

    public function resultat() {

        foreach ($this->listeNote as $note) {
           $note->affiche();
        }

        echo "\nla moyenne est " . $this->moyenne();
    }

    public function moyenne() {
        $moyenne = 0.0;

        foreach ($this->listeNote as $note) {
            $moyenne += $note->getNote();
        }
        $moyenne = $moyenne / count($this->listeNote);
        return $moyenne;
    }

}