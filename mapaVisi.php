<?php include("lib/header.php"); ?>
<?php include("lib/functions.php"); ?>
<?php include("map.php"); ?>

<div class="row justify-content-center">
    <?php gravar_log(); ?>
</div>
<div id="map"></div>



<script type="text/javascript">
    // convierte las coordenadas de formato JSON a un array de JavaScript
    var coordinates = <?php echo $json_coordinates; ?>;



    var map = L.map('map').setView([41.5374, 2.1022], 5);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);


    // crea un marcador por cada par de coordenadas
    for (var i = 0; i < coordinates.length; i++) {
        var marker = L.marker(coordinates[i]).addTo(map);
    }
</script>

<?php include("lib/footer.php"); ?>