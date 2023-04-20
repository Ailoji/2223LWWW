<?php
// Abrir el archivo CSV
$file = fopen('pavellons.csv', 'r');

// Leer la primera línea del archivo CSV y descartarla (si contiene encabezados)
$header = fgetcsv($file, 0, ';');

// Inicializar el array de datos
$data = array();

// Leer cada línea del archivo CSV y agregarla al array de datos
while (($row = fgetcsv($file, 0, ';')) !== false) {
    $data[] = $row;
}

// Cerrar el archivo CSV
fclose($file);

// Mostrar el array de datos
//var_dump($data);

// Crear un objeto GeoJSON vacío
$geojson = array(
    'type' => 'FeatureCollection',
    'features' => array()
);

// Recorrer el array y construir los objetos Feature
foreach ($data as $element) {
    $feature = array(
        'type' => 'Feature',
        'geometry' => array(
            'type' => 'Point',
            'coordinates' => array((float)$element[5], (float)$element[6])
        ),
        'properties' => array(
            'id' => $element[0],
            'name' => $element[1],
            'venue' => $element[2],
            'city' => $element[3],
            'region' => $element[4]
        )
    );
    // Agregar el objeto Feature al array de features
    array_push($geojson['features'], $feature);
}

// Convertir el objeto GeoJSON a formato JSON
$json = json_encode($geojson, JSON_NUMERIC_CHECK);
echo ($json);
