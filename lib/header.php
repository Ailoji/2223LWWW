<!doctype html>
<HTML LANG="Catalan">

<HEAD>
    <TITLE>Llenguatge de marques(XML i JSON) i serveis web (2023) ALJ</TITLE>
    <meta http-equiv="Content-Type" content="text/html; ISO-8859-1">
    <meta charset="utf-8">

    <META NAME="DC.Language" SCHEME="RFC1766" CONTENT="Catalan">
    <META NAME="AUTHOR" CONTENT="Aitor López">
    <META NAME="REPLY-TO" CONTENT="alope179@xtec.cat">
    <LINK REV="made" href="mailto:alope179@xtec.cat">
    <META NAME="DESCRIPTION" CONTENT="Porfoli personal">
    <META NAME="KEYWORDS" CONTENT="XML,HTML,XHTML,JSON">
    <META NAME="Resource-type" CONTENT="Document">
    <META NAME="robots" content="ALL">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-qYZiL40X9qOj5z5e/Ha5Q5IooUxw6UOa6UW0RvRaxLuM9eMhHLA8kW1Nv7/1xyiJh/d/8y3WsjLyQjP9z9rymQ==" crossorigin="anonymous" />
<link rel="stylesheet" href="svg.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://api.mapbox.com/mapbox.js/plugins/leaflet-omnivore/v0.3.1/leaflet-omnivore.min.js"></script>

    <style type="text/css">
        #map {
            width: 100%;
            height: 400px;

            padding-right: 20px;
        }
    </style>

    <style>
        h2 {
            text-align: center;
        }
    </style>
</HEAD>


<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">El meu portfoli</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Exercicis</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="./projecte0.php">Mòdul 0</a>
                            <a class="dropdown-item" href="./projecte1.php">Mòdul 1</a>
                            <a class="dropdown-item" href="./projecte2.php">Mòdul 2</a>
                            <a class="dropdown-item" href="./projecte3.php">Mòdul 3</a>
                            <a class="dropdown-item" href="./projecte4.php">Mòdul 4</a>
                            <a class="dropdown-item" href="./projecte5.php">Mòdul 5</a>
                        </div>
                    </li>
                </ul>
                <a class="nav-link" href="sobreAutor.php">Sobre mi</a>

            </div>

            <form class="form-inline my-2 my-lg-0" action="javascript:busca();" method="get">
                <input id="cerca" name="cerca" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>
        <div class="row">
<!--             <div id="meteo" class="col-md-3 col-xs-12 contenedor-imagenes"></div>
 -->            <div class="col-md-12 col-xs-12 contenedor-imagenes">
                <img class="banner" src="img/banner_portfoli.jpg" height="180" width="965" alt="" />
            </div>
<!--             <div id="musica" class="col-md-3 col-xs-12 contenedor-imagenes"></div>
 -->        </div>

        <div id="contenido-modal" style="display: none;"></div>