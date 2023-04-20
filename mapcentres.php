<?php

// URL de la API
$url = "https://analisi.transparenciacatalunya.cat/resource/kvmv-ahh4.json";

// Obtener los datos en formato JSON desde la URL
$json_data = file_get_contents($url);

// Convertir los datos JSON a un array asociativo
$data = json_decode($json_data, true);

// Crear un nuevo objeto KML
$kml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><kml xmlns="http://www.opengis.net/kml/2.2"></kml>');

// Iterar sobre los datos y crear un placemark para cada ubicación
foreach ($data as $row) {
    // Crear un nuevo objeto Placemark en el KML para el punto de la ubicación
    $placemark = $kml->addChild('Placemark');

    // Establecer la información del placemark
    $placemark->addChild('name', $row['denominaci_completa']);
    $placemark->addChild('description', $row['adre_a']);
    $placemark->addChild('Point')->addChild('coordinates', $row['coordenades_geo_x'] . ',' . $row['coordenades_geo_y']);
}

// Crear un objeto DOMDocument para dar formato al KML
$dom = new DOMDocument('1.0');
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($kml->asXML());

// Imprimir el KML formateado
echo $dom->saveXML();
