<?php include("lib/header.php"); ?>
<?php include("lib/functions.php"); ?>
<?php include("graf.php"); ?>

<div class="row justify-content-center">
    <?php gravar_log(); ?>
</div>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart', 'bar', 'geochart']
    });
    google.charts.setOnLoadCallback(drawCharts);

    function drawCharts() {
        var jsonData = <?php echo $json_data; ?>;

        // Crea un array para las coordenadas
        var coordData = [
            ['Coordenadas', 'Count']
        ];
        var coordCounts = {};
        for (var i = 0; i < jsonData.length; i++) {
            var coord = jsonData[i].coordenadas;
            if (coordCounts[coord] == undefined) {
                coordCounts[coord] = 0;
            }
            coordCounts[coord]++;
        }
        for (var coord in coordCounts) {
            coordData.push([coord, coordCounts[coord]]);
        }

        // Crea un array para WBS
        var wbsData = [
            ['WBS', 'Count']
        ];
        var wbsCounts = {};
        for (var i = 0; i < jsonData.length; i++) {
            var wbs = jsonData[i].wbs;
            if (wbsCounts[wbs] == undefined) {
                wbsCounts[wbs] = 0;
            }
            wbsCounts[wbs]++;
        }
        for (var wbs in wbsCounts) {
            wbsData.push([wbs, wbsCounts[wbs]]);
        }

        // Crea un array para países
        var paisData = [
            ['País', 'Count']
        ];
        var paisCounts = {};
        for (var i = 0; i < jsonData.length; i++) {
            var pais = jsonData[i].pais;
            if (paisCounts[pais] == undefined) {
                paisCounts[pais] = 0;
            }
            paisCounts[pais]++;
        }
        for (var pais in paisCounts) {
            paisData.push([pais, paisCounts[pais]]);
        }

        // Crea y dibuja los gráficos de barras
        var coordChart = new google.visualization.ColumnChart(document.getElementById('coord_chart'));
        coordChart.draw(google.visualization.arrayToDataTable(coordData), {
            title: 'Coordenadas'
        });

        /*         var wbsChart = new google.visualization.ColumnChart(document.getElementById('wbs_chart'));
                wbsChart.draw(google.visualization.arrayToDataTable(wbsData), {
                    title: 'WBS'
                }); */

        /*         var paisChart = new google.visualization.ColumnChart(document.getElementById('pais_chart'));
                paisChart.draw(google.visualization.arrayToDataTable(paisData), {
                    title: 'Países'
                }); */

        // segundo gráfico: 
        var data = google.visualization.arrayToDataTable(wbsData);

        var options = {
            title: 'Navegadors',
            is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('wbs_chart'));
        chart.draw(data, options);

        // tercer gráfico: países
        var data = google.visualization.arrayToDataTable(paisData);

        var options = {
            title: 'Países',
            region: 'world',
            displayMode: 'regions',
            resolution: 'countries',
        };

        var chart = new google.visualization.GeoChart(document.getElementById('pais_chart'));
        chart.draw(data, options);

    }
</script>
<div class="row mt-5 justify-content-center">
    <h1>Gràfics de Google Charts</h1>
</div>
<div class="row mt-5 justify-content-center">
    <div id="coord_chart" class="col-md-6"></div>
    <div id="wbs_chart" class="col-md-6"></div>

</div>
<div class="row mt-5 justify-content-center">
    <div id="pais_chart" class="col-md-12"></div>

</div>


<?php include("lib/footer.php"); ?>