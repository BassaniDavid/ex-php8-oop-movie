<?php
// importo i traits per primi
require_once "./traits/protagonist.php";

// importo i movies
require_once "./models/movies.php";

// importo i generi
require_once "./models/genre.php";

// genero primo film
$Ballerina = new genre("Ballerina", " Len Wiseman", 2025, ["azione", "thriller"], "azione");
// genero secondo film
$MissionImpossible = new genre("Mission: Impossible – The Final Reckoning", "Christopher McQuarrie", 2025, ["azione", "thriller"], "azione");

// genero trait protagonista per primo film
$Ballerina->setProtagonista("keanu Reeves");
// genero trait protagonista per secondo film
$MissionImpossible->setProtagonista("Tom Cruise");

// controllo
// var_dump($Ballerina);
// var_dump($MissionImpossible);

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
    <div class="d-flex justify-content-around gap-4">
        <div class="card m-3 p-3">
        <?php
           foreach($Ballerina as $key => $value) {
               if(is_array($value)){  
                   echo "<div><p>$key: </p>";
                   foreach($value as $generi){
                   echo "<p><strong>$generi</strong></p>";
                   }
                   echo "</div>";
   
               }else if($key == "genere"){
                   echo "<p><strong>$value</strong></p>";
               }else{
               echo "<p>$key : <strong>$value</strong></p>";
               }
           }
       ?>
       </div>
        <div class="card m-3 p-3">
        <?php
           foreach($MissionImpossible as $key => $value) {
               if(is_array($value)){  
                   echo "<div><p>$key: </p>";
                   foreach($value as $generi){
                   echo "<p><strong>$generi</strong></p>";
                   }
                   echo "</div>";
   
               }else if($key == "genere"){
                   echo "<p><strong>$value</strong></p>";
               }else{
               echo "<p>$key : <strong>$value</strong></p>";
               }
           }
       ?>
       </div>
    </div>
    
</body>
</html>