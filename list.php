<?php

// SENZA JSON
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

// $coseDaFare = [
//     [ "titolo" => "Fare la spesa", "done" => false ],
//     [ "titolo" => "Studiare per l'esame", "done" => true ],
//     [ "titolo" => "Andare in palestra", "done" => false ],
//     [ "titolo" => "Pulire la casa", "done" => false ],
//     [ "titolo" => "Leggere un libro", "done" => true ],
//     [ "titolo" => "Scrivere un'email", "done" => false ],
//     [ "titolo" => "Fare una passeggiata", "done" => true ],
//     [ "titolo" => "Guardare un film", "done" => false ]
// ];


// header('Content-Type=> application/json');

// echo json_encode($coseDaFare);

// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX



$fileContent  = file_get_contents("dati.json");

header('Content-Type: application/json');

echo $fileContent ;

