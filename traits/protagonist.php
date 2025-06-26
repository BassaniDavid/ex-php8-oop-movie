<?php

// definire trait da aggiungere a Movie
trait Protagonista {
    protected $protagonista;

    // funzione set
    public function setProtagonista($newprotagonista) {
            $this-> protagonista = $newprotagonista;
        }
    
        // funzione get
    public function getProtagonista() {
            return $this-> protagonista;
        }
}

?>