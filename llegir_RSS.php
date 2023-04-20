<?php include("lib/header.php"); ?>
<?php include("lib/functions.php"); ?>
<?php include("graf.php"); ?>

<div class="row justify-content-center">
    <?php gravar_log(); ?>
</div>
<div class="row justify-content-center">
<?php

// URL del fitxer RSS
$rssUrl = "https://api.ccma.cat/noticies?_format=rss&origen=frontal&frontal=n324-portada-noticia&version=2.0";

// Càrrega el contingut del fitxer RSS en un objecte SimpleXMLElement
$rss = simplexml_load_file($rssUrl);

// Obté la informació del canal (títol, descripció, enllaç, etc.)
$channel = $rss->channel;
$channelTitle = $channel->title;
$channelDescription = $channel->description;
$channelLink = $channel->link;
$channelImage = $channel->image->url;



// Mostra el títol del canal
$t = '<div class="capsal" ><img class="logo" src="'. $channelImage .'"  /> </center>';
$t .= '<center><h1>' .$channelTitle .'</h1><hr/></center></div>';
// Mostra les 10 primeres notícies del fitxer RSS
$maxNews = 10;
$items = $rss->channel->item;
for ($i = 0; $i < $maxNews; $i++) {
  $item = $items[$i];
  $title = $item->title;
  $pubDate = date("d/m/Y H:i", strtotime($item->pubDate));
  $link = $item->link;
  $description = $item->description;

  $t .= '<div class="noti"><a href="'. $link .'" class="enllas"><p class="titol">' . $title . '</p></a><br />'; 
  $t .= '<p class="data">[' . $pubDate .'] </p><br /><span class="descri">' . $description .'</span></div> <hr />';
}
echo $t ; 
?>

</div>

<?php include("lib/footer.php"); ?>