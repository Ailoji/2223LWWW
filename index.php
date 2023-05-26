<?php include("lib/header.php"); ?>
<?php include("lib/functions.php"); ?>

<div class="row justify-content-center">
    <?php gravar_log(); ?>
</div>
<hr>
<div id="files">
    <div class="row">

        <div id="0" class="col link">
            <a href="projecte0.html">
                <h2> Mòdul 0 </h2>
            </a>
            <p> Peparació d'eines i primer contacte amb dades</p>
            <a href="projecte0.php"> <img src="img/projecte0.jpg" alt="" class="fotomodul"></a>
        </div>
        <div id="1" class="col link ">
            <a href="projecte1.php">
                <h2> Mòdul 1 </h2>
            </a>
            <p> Del fitxer XML a la plantilla XSLT</p>
            <a href="projecte1.php"> <img src="img/projecte2.jpg" alt="" class="fotomodul"></a>

        </div>
        <div id="2" class="col link">
            <h2> Mòdul 2</h2>
            <p> El format JSON protagonista </p>
            <a href="projecte2.php"> <img src="img/projecte5.jpg" alt="" class="fotomodul"></a>

        </div>
    </div>
    <div class="row">
        <div id="3" class="col link">
            <h2> Mòdul 3</h2>
            <p> Els formats XML i els Webservices </p>
            <a href="projecte3.php"><img src="img/projecte6.jpg" alt="" class="fotomodul"></a>

        </div>
        <div id="4" class="col link">
            <h2> Mòdul 4</h2>
            <p> Creació de servidors i clients webservices </p>
            <a href="projecte4.php">
                <img src="img/projecte1.jpg" alt="" class="fotomodul"></a>

        </div>
        <div id="5" class="col link">
            <h2> Mòdul 5</h2>
            <p> Creació de servidors i clients webservices</p>
            <a href="projecte5.php">

                <img src="img/projecte4.jpg" alt="" class="fotomodul"></a>

        </div>
    </div>
    <hr class="mb-5">
    <div class="row">
    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <div id="musica" class="d-flex justify-content-center align-items-center mr-3" style="height: 250px; width: 250px;">
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <div class="d-flex justify-content-center align-items-center ml-3" style="height: 250px; width: 250px; ">
                <?php include("nasa.php"); ?>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <div id="meteo" class="d-flex justify-content-center align-items-center" style="height: 250px; width: 250px;">
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <div class="d-flex justify-content-center align-items-center" style="height: 250px; width: 250px;">
                <?php include("santoral.php"); ?>
            </div>
        </div>


    </div>


    <?php include("lib/footer.php"); ?>