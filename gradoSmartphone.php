<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grado smartphone</title>
</head>
<body>

<?php

   $modello = "Iphone 16";
   $grado = "y";
   $cont = 0;

   switch($grado){

       case "a": 
        echo "<h2>$modello perfetto, pari al nuovo </h2>";
        $cont++;
        break;

       case "b":
        echo "<h2>$modello in ottime condizioni</h2>";
        $cont++;
        break;

       case "c":
        echo "<h2>$modello con graffi e/o segni di usura</h2>";
        $cont++;
        break;

        

   }
    
   if ($cont == 0) {
    echo "<h2 style='color: red';>errore: grado non riconosciuto";
   }

   







?>

    
</body>
</html>