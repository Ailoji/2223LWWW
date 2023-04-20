<?php include("lib/header.php"); ?>
<?php include("lib/functions.php"); ?>
<?php include("graf.php"); ?>

<div class="row justify-content-center">
    <?php gravar_log(); ?>
</div>
<div class="row justify-content-center">
<div id="rss-content"></div>
</div>
<script>
$(document).ready(function() {
  $.ajax({
    url: "rsss.xml",
    success: function(data) {
      $(data).find("item").each(function() {
        var title = $(this).find("title").text();
        var link = $(this).find("link").text();
        var description = $(this).find("description").text();
        var pubDate = $(this).find("pubDate").text();
        $("#rss-content").append("<div><a href='" + link + "'>" + title + "</a><br>" + pubDate + "<br>" + description + "</div>");
      });
    }
  });
});
</script>



<?php include("lib/footer.php"); ?>