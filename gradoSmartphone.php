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
   $grado = "b";

   switch($grado){

       case "a": 
        echo "<p>$modello perfetto, pari al nuovo </p>";
        break;

       case "b":
        echo "<p>$modello in ottime condizioni";
        break;

       case "c":
        echo "<p>$modello con graffi e/o segni di usura</p>";


   }







?>

    
</body>
</html>