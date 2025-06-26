<?php

// definire classe movie
class Movie {
    // definire istanze
    public $nome;
    public $regista;
    public $anno;
    protected Genre $genere;

    use Protagonista;

    // costruttore
    public function __construct($_nome, $_regista, $_anno, Genre $_genere)
    {
        $this->nome = $_nome;
        $this->regista = $_regista;
        $this->anno = $_anno;
        $this->genere = $_genere;
    }

    // metodo get per il titolo
    public function getMovieName() {
        return $this->nome;
    }

    // metodo get per il genere
    public function getGenreName() {
        return $this->genere->getGenre();
    }

}

// class Movie {
//     publi $title;
//     ecc
//     protected Genre $genre;

//     ...

//     public function getGenre() {
//         return $this-> Genre-> getName();
//     }
// }
?>

