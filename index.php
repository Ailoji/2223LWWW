<?php include("lib/header.php"); ?>
<?php include("lib/functions.php"); ?>

<div class="row justify-content-center">
    <?php gravar_log(); ?>
</div>
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
    <div class="row">
        <div class="col link ml-5">
            <div id="meteo" class="ml-5"></div>


        </div>
        <div class="col link  ml-5">
            <div> <?php include("nasa.php"); ?></div>
        </div>
        <!--         <div class="col link  ml-5">
        </div> -->
        <div class="col link  ml-5">
            <div id="musica"></div>
        </div>

    </div>
    <div><?php include("santoral.php"); ?></div>
    <?php include("lib/footer.php"); ?>