<?php
$url_portfoli = "projecte3.php"; // Url del portfoli 
// Llegeix el contingut del fitxer HTML
$html = file_get_contents($url_portfoli);

// Crea un objecte DOM a partir del contingut del fitxer HTML
//$dom = new DOMDocument();
// $dom->loadHTML($html);
// Com el portfoli fa servir etiquetes NAV que donen error , emprem una directiva que es salte els erros sense parar el procés , per això he comentat la proposta inicial 

libxml_use_internal_errors(true);
$dom = new DOMDocument();
$dom->loadHTML($html);
libxml_clear_errors();



// Busca totes les capes amb la classe "DIV"
$links = $dom->getElementsByTagName('div');
$items = array(); // Declara l'array que guardara els elements DIV a tractar 

foreach ($links as $link) {   // Fa un bucle entre tots els elements DUV del portfoli però filtrarà
  // Comprova si la capa té l'atribut "id" que compleix el format "X.X"
  $id = $link->getAttribute('id');
  if (preg_match('/^\d+\.\d+$/', $id)) {
    // Si la capa compleix el format, recupera les dades de la notícia
    $title = $link->getElementsByTagName('h2')->item(0)->nodeValue ;
    $description = $link->getElementsByTagName('p')->item(0)->nodeValue;
/*     $image = $url_portfoli.$link->getElementsByTagName('img')->item(0)->getAttribute('src');
 */    $url = $url_portfoli ."index.php?pagina=".  $id . '.html';
  //  $date = date('D, d M Y H:i:s O', filemtime($url_portfoli.'activitats/' . $id . '.html' ));
/*     $date = date('D, d M Y H:i:s O', filemtime('../activitats/' . $id . '.html'));
 */    // Crea un element d'RSS per a la notícia
    $item = array(
      'title' => $title,
      'description' => $description,
/*       'image' => $image,
/*  */     /*  'pubDate' => $date, */
     'url' => $url,
         );
      array_push($items, $item); // Afegueix l'objecte ·item creat amb le sdades que ha recollit de la capa DIV de la noticia 
  }
}

// Crea un document d'RSS
$rss = new DOMDocument('1.0', 'UTF-8');
$rss->formatOutput = true;

$rss_tag = $rss->createElement('rss');
$rss_tag->setAttribute('version', '2.0');
$rss_tag->setAttribute('xmlns:slash', 'http://purl.org/rss/1.0/modules/slash/');
$rss->appendChild($rss_tag);


$channel = $rss->createElement('channel');
$rss_tag->appendChild($channel);


$title = $rss->createElement('title', 'El meu portfoli');
$channel->appendChild($title);

$link = $rss->createElement('link', $url_portfoli);
$channel->appendChild($link);

/* $link = $rss->createElement('image', $url_portfoli.'/img/banner_portfoli.jpg');
$channel->appendChild($link); */

$description = $rss->createElement('description', 'Activitats del portfoli');
$channel->appendChild($description);

foreach ($items as $item) {
  $title = $item['title'];
  $description = $item['description'];
/*   $image = $item['image'];
 */  $url = $item['url'];
/*   $date = $item['pubDate'];
 */
  $item_node = $rss->createElement('item');

  $title_node = $rss->createElement('title',  $title );
  $item_node->appendChild($title_node);

  $description_node = $rss->createElement('description', '');
  $item_node->appendChild($description_node);

$cdata = $rss->createCDATASection($description);
$description_node->appendChild($cdata);

  $link_node = $rss->createElement('link', $url);
  $item_node->appendChild($link_node);

/*   $pubDate_node = $rss->createElement('pubDate', $date);
 */ /*  $item_node->appendChild($pubDate_node); */

  $enclosure = $rss->createElement('enclosure');
/*   $enclosure->setAttribute('url', $image);
 */  $enclosure->setAttribute('type', 'image/jpeg');
 
  $item_node->appendChild($enclosure);

   $channel->appendChild($item_node);
 
}


// Envia el document d'RSS com a resposta HTTP
// Afegueix una capçalera rss+xml 
/* header('Content-type: application/rss+xml');
 */header('Content-type: text/html');

echo $rss->saveXML();