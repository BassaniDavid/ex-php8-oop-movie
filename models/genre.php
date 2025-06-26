<?php

// definire classe genere
class Genre extends Movie {
    // definire istanza
    public $genere;

    // uso del trait
    Use protagonista;

    // costruttore
    public function __construct($_nome, $_regista, $_anno,$_generi, $_genere)
    {   
        // passiamo i paramentri al genitore
        parent::__construct($_nome, $_regista, $_anno, $_generi);
        $this->genere = $_genere;
    }
}

?>