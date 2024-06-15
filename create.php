<?php

//leggo il file json dal disco
$fileContent  = file_get_contents("dati.json");



//se ho i dati per aggiungere uno studente...
if( isset($_POST["titolo"]) ) {

    //converto il json in un array associativo php
    $coseDaFare = json_decode($fileContent , true);

    //creo un nuovo studente
    $ListElement  = [
        "titolo" => $_POST["titolo"],
        "done" => true,
    ];


    //pusho lo studente appena creato nel mio array
    $coseDaFare[] = $ListElement;

    //converto tutto l'array in un json
    $fileContent  = json_encode($coseDaFare);

    //scrivo il json su disco
    file_put_contents("dati.json", $fileContent );
    
}


// trasformo l'array in un file json
header('Content-Type=> application/json');

//restituisco il nuovo json con il contenuto aggiornato del file
echo json_encode($fileContent );

