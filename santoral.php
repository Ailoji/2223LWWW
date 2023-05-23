<?php

// Scraping Agenda el Punt Avui
$url = "https://www.elpuntavui.cat/agenda/portada/barcelona.html";

// Llegim el contingut de la pàgina web
$html = file_get_contents($url);

// Creem una instància de DOMDocument i desactivem la validació DTD
$dom = new DOMDocument();
libxml_use_internal_errors(true);
$dom->loadHTML($html, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD); // per evitar errors en els elements desactivem DTD 

// Creem una instància de DOMXPath per buscar per XPath
$xpath = new DOMXPath($dom);

$diasetmana = $xpath->evaluate('string(/html//div[@class="agenda_santoral_dia"]/span[@class="santoral_diasetmana"])'); // agafem el dia de la setmana 
$dia = $xpath->evaluate('string(/html//div[@class="agenda_santoral_dia"]/span[@class="santoral_numero"])'); // Agafem el numero del dia 
$mes = $xpath->evaluate('string(/html//div[@class="agenda_santoral_dia"]/span[@class="santoral_mes"])'); //7 Agafem el mes 

$sants = ''; // Variable per crear la llista de sants 
$elements = $xpath->query('/html//div[@class="agenda_santoral"]//p/b'); // Agafem la llista de sants que estan dins la ruta amb l'element <b>
foreach ($elements as $element) {  // Com que tenim mes d'un sants agafem del text tots els elements <b> i eliminem el text que els acompanya com bisbe, màrtir, etc 
$sants .= $element->nodeValue . ', ';
}
$sants = rtrim($sants, ', ');

// Generem la sortida aplicant el nostre propi estil CSS 
$html_elpunt = '<center><div style="border: 1px solid green;"><h4>Santoral</h4>';
$html_elpunt .= '<div class="agenda_santoral_dia"><span class="dia_setmana"><h6>' . $diasetmana. '</h6></span><br/>';
$html_elpunt .= '<span style="position: relative; top : -30px;" ><h3>' . $dia. '</h3></span><br/>';
$html_elpunt .= '<span style="position: relative ; top: -60px; display: inline-block; width: 100%; height: 40px; background-color: green; color: white ; text-transform: uppercase;" ><h4>' . $mes .'</h4></span></div></center>';
$html_elpunt .= '<span style="position: relative ; top: -60px;" ><h6>' . utf8_decode($sants) .'</h6></span></div></center>';


echo '<div id="santoral"  >' . $html_elpunt .'</div>';

?>