<?php
   $rss_url = "https://apod.nasa.gov/apod.rss"; // RSS de APOD de la NASA

// Agafem el contingut del RSS
$rss_content = file_get_contents($rss_url);

// Convertim el contingut del RSS en un objete SimpleXML
$xml = simplexml_load_string($rss_content);

// Accedim al primer element item
$item = $xml->channel->item[0];
$titol = $item->title ; 
$url = $item->link ; 

// Accedim als diferents elements que necessitem
$description = html_entity_decode($item->description); // Decodifiquem el description 
$description = str_replace('<a>', ' ', $description); // Eliminem l'etiqueta <a> 
$description = str_replace('</p>&#60;br clear="all"/>', '</a> ', $description); // Substituim  l'etiqueta </a> que haviem eliminat perque molestava  en la posiciñó que tenia 
$description = str_replace('<p>', '<br /> ', $description); // Eliminem l'etiqueta <p>
$html_nasa = str_replace('border="0"', 'border="0" width="250" heigth="200" ', $description); // Eliminem la mida d ela foto 

echo '<div id="nasa"  > ' . $html_nasa . '</div>';