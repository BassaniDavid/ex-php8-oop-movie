<?php

// definire classe genere
class Genre {

    // definire istanza genere
    protected $genere;

    // costruttore
    public function __construct($_genere){   
        $this->genere = $_genere;
    }

    // funzione get
    public function getGenre(){
        return $this->genere;
    }
}

?>