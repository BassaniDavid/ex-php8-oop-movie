<?php

// definire classe movie
class Movie {
    // definire istanze
    public $nome;
    public $regista;
    public $anno;
    public $generi;

    // costruttore
    public function __construct($_nome, $_regista, $_anno, $_generi)
    {
        $this->nome = $_nome;
        $this->regista = $_regista;
        $this->anno = $_anno;
        $this->generi = $_generi;
    }

    // metodo get per il titolo
    public function getMovie() {
        return $this->nome;
    }

}


?>