<?php 

// URL de la página a convertir en XML
$url = 'https://www.acb.com/club/index/temporada_id/2022';

// Obtener el contenido de la página
$html = file_get_contents($url);

// Desactivar temporalmente los mensajes de error
libxml_use_internal_errors(true);

// Crear una nueva instancia de DOMDocument
$dom = new DOMDocument();

// Cargar el contenido HTML en DOMDocument
$dom->loadHTML($html);

// Reactivar los mensajes de error
libxml_use_internal_errors(false);

// Crear una nueva instancia de DOMXPath
$xpath = new DOMXPath($dom);

// Seleccionar los elementos que quieres incluir en el XML utilizando XPath
$elements = $xpath->query('//div[@class="listado_clubes"]/article');

// Crear un nuevo documento XML
$xml = new DOMDocument();

// Crear el elemento raíz del XML
$root = $xml->createElement('root');

// Iterar sobre los elementos seleccionados y añadirlos al XML
foreach ($elements as $element) {
  $xml_element = $xml->createElement('element');
  $xml_element->nodeValue = $element->nodeValue;
  $root->appendChild($xml_element);
}

// Añadir el elemento raíz al XML
$xml->appendChild($root);

// Imprimir el XML generado
echo $xml->saveXML();


