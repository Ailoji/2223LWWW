<?php include("lib/header.php"); ?>
<?php include("lib/functions.php"); ?>
<?php include("graf.php"); ?>

<div class="row justify-content-center">
    <?php gravar_log(); ?>
</div>

<div id="noticies" class="row justify-content-center mt-5">Noticies</div>

<script type="text/javascript" >
var max = 10 ;
var c = 0;
      var rssUrl = "rss_ensenyament.rss";
    
    // Màxim 5 notícies
    var maxNews = 5;
      // 3 dies en milisegons
    //var threeDaysAgo = new Date().getTime() - (1000 * 24 * 60 * 60 * 1000);
  
    // Fer sol·licitud HTTP GET al fitxer RSS
    $.get(rssUrl, function(data) {
      // Processar resposta XML
      var $xml = $(data);
      var filteredItems = $xml.find("item");
    /*  
     // Filtrar notícies segons data
      var filteredItems = items.filter(function() {
        var pubDate = new Date($(this).find("pubDate").text()).getTime();
        return pubDate = threeDaysAgo;
      });
  */
  
  
      // Només mostrar màxim 5 notícies
      filteredItems = filteredItems.slice(0, maxNews);
  
  
      // Crear HTML per a cada notícia
      var newsHtml = "<ul>";
      filteredItems.each(function() {
         var p = ""; 
         var title = $(this).find("title").text();
         var pubDate = new Date($(this).find("pubDate").text()).toLocaleDateString("es-ES");
         var link = $(this).find("link").text();
         var descri = $(this).find("description").text();
          p   = "<li><a href='" + link + "'>" + title + " [ " + pubDate + "] </a><br />";
          p  += "<i>" + descri + "</i></li><hr />"; 
         newsHtml += p ; 
        
        });
     
   newsHtml += "</ul>" ; 
      // Inicialitzar carrussel amb les notícies
          $("#noticies").html(newsHtml);
 });

 </script>
 <?php include("lib/footer.php"); ?>