<?php 

$file = "access.log";

// crea un array para almacenar los datos
$data = array();

// lee el contenido del archivo en un array
$lines = file($file);

// procesa cada línea por separado
foreach ($lines as $line) {
    // divide la línea en sus campos
    $fields = explode("|", $line);
    
    // añade las coordenadas, wbs y país al array
    $data[] = array(
        'coordenadas' => $fields[2],
        'wbs' => $fields[3],
        'pais' => $fields[4]
    );
}

// convierte el array de datos a formato JSON
$json_data = json_encode($data);

?>