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

// definire classe genere
class Genre extends Movie {
    // definire istanza
    public $genere;

    // costruttore
    public function __construct($_nome, $_regista, $_anno,$_generi, $_genere)
    {   
        // passiamo i paramentri al genitore
        parent::__construct($_nome, $_regista, $_anno, $_generi);
        $this->genere = $_genere;
    }
}


$Ballerina = new genre("Ballerina", " Len Wiseman", 2025, ["azione", "thriller"], "azione");
$MissionImpossible = new genre("Mission: Impossible – The Final Reckoning", "Christopher McQuarrie", 2025, ["azione", "thriller"], "azione");

var_dump($Ballerina);
var_dump($MissionImpossible);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>