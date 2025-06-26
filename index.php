<?php
// importo i traits per primi
require_once "./traits/protagonist.php";

// importo i movies
require_once "./models/movies.php";

// importo i generi
require_once "./models/genre.php";

// importo dati film
require_once "./db.php";

// genero trait protagonista per primo film
$movie[0]->setProtagonista("keanu Reeves");
// genero trait protagonista per secondo film
$movie[1]->setProtagonista("Tom Cruise");
// genero trait protagonista per secondo film
$movie[2]->setProtagonista("Mason Thames");

// controllo
// var_dump($movie);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>PHP classe movie</title>
</head>
<body class="text-center container my-5">
     <h1 class="mb-5">Film disponibili</h1>
    <div class="d-flex justify-content-around  flex-wrap">

        <?php
           foreach($movie as $film) {
       ?>
       <!-- html racchiuso in php -->
       <div class="card m-3 p-3 col-10 col-md-5 col-lg-3">
            <h4 class="my-3"> <?php echo $film->nome  ?></h4>
            <div class="text-start">
                <h5> <?php echo "regista: " . $film->regista  ?></h5>
                <h5> <?php echo "anno di produzione: " . $film->anno  ?></h5>
                <h5> <?php echo "genere: " . $film->getGenreName()  ?></h5>
            </div>
       </div>
        <?php
           }
       ?>

    </div>
    
</body>
</html>