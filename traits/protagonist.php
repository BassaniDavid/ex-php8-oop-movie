<?php

// definire trait da aggiungere a Movie
trait Protagonista {
    public $protagonista;

    public function setProtagonista($newprotagonista) {
    
            $this-> protagonista = $newprotagonista;
        }
}

?>