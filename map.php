<?php


$file = "access.log";

// crea un array para almacenar las coordenadas
$coordinates = array();

// lee el contenido del archivo en un array
$lines = file($file);

// procesa cada línea por separado
foreach ($lines as $line) {
    // divide la línea en sus campos
    $fields = explode("|", $line);
    // añade las coordenadas al array
    $coordinates[] = array($fields[5], $fields[6]);
}

// convierte el array de coordenadas a formato JSON
$json_coordinates = json_encode($coordinates);

?>