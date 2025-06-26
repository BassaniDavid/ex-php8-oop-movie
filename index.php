<?php

// definire classe movie
class Movie {
    public $nome;
    public $regista;
    public $anno;

    // costruttore
    public function __construct($_nome, $_regista, $_anno)
    {
        $this->nome = $_nome;
        $this->regista = $_regista;
        $this->anno = $_anno;
    }

    // metodo get per il titolo
    public function getMovie() {
        return $this->nome;
    }

}

$Ballerina = new Movie("Ballerina", " Len Wiseman", 2025);
$MissionImpossible = new Movie("Mission: Impossible – The Final Reckoning", "Christopher McQuarrie", 2025);

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