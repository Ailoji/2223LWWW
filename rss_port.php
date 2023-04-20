<?php include("lib/header.php"); ?>
<?php include("lib/functions.php"); ?>
<?php include("graf.php"); ?>

<div class="row justify-content-center">
    <?php gravar_log(); ?>
</div>
<div class="row justify-content-center">
<div id="rss-feed"></div>

</div>
<script>
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      // Cargar el archivo XSLT
      var xslt = new XMLHttpRequest();
      xslt.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          // Aplicar la transformación XSLT
          var parser = new DOMParser();
          var xml = parser.parseFromString(xhr.responseText, "text/xml");
          var xsl = parser.parseFromString(xslt.responseText, "text/xml");
          var processor = new XSLTProcessor();
          processor.importStylesheet(xsl);
          var result = processor.transformToDocument(xml);
          var rssFeed = document.getElementById("rss-feed");
          rssFeed.innerHTML = new XMLSerializer().serializeToString(result);
        }
      };
      xslt.open("GET", "rss.xslt", true);
      xslt.send();
    }
  };
  xhr.open("GET", "rss", true);
  xhr.send();
</script>

<?php include("lib/footer.php"); ?>