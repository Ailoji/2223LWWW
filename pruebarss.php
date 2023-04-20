<?php
$url = "http://aitorlopez.alwaysdata.net/rss_port.php";
$xml = @simplexml_load_file($url);

if (!$xml) {
    echo "No se pudo cargar el archivo XML";
} else {
    echo "<?xml version='1.0' encoding='UTF-8'?>
    <rss version='2.0'>
    <channel>
    <title>Canal RSS de Aitor López</title>
    <link>http://aitorlopez.alwaysdata.net</link>
    <description>Últimas noticias de Aitor López</description>";

    foreach ($xml->channel->item as $item) {
        echo "<item>
        <title>" . $item->title . "</title>
        <link>" . $item->link . "</link>
        <description>" . $item->description . "</description>
        <pubDate>" . $item->pubDate . "</pubDate>
        <guid>" . $item->guid . "</guid>
        </item>";
    }

    echo "</channel>
    </rss>";
}
?>
