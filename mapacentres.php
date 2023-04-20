<?php include("lib/header.php"); ?>
<?php include("lib/functions.php"); ?>
<?php include("map.php"); ?>

<div class="row justify-content-center">
    <?php gravar_log(); ?>
</div>
<div class="row justify-content-center">
<div id="map"></div>
</div>

  <script>
    var map = L.map('map').setView([41.39, 2.15], 13);

    // Agrega el mapa base de OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // URL de la API
    var url = "mapcentres.php";

    // Carga el archivo KML usando leaflet-omnivore
    omnivore.kml(url).addTo(map);
  </script>
<?php include("lib/footer.php"); ?>