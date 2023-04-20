<?php
// Conectarse a la base de datos MySQL
$host = "mysql-aitorlopez.alwaysdata.net";
$username = "298837";
$password = "9@S#9PhTC!s!za%bH62eXXH@";
$dbname = "aitorlopez_179";

$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
  die("Conexión fallida: " . mysqli_connect_error());
}

$url = "https://script.google.com/macros/s/AKfycbwxCgN4fEHhMwWY1hN4OMThyow59Y6XBI21q66GPQYqxCLg3Ik-Z7it0lUHMdKsmKiO/exec";

// Leer el archivo XML
$xml = file_get_contents($url);

// Crear un objeto DOM a partir del archivo XML
$doc = new DOMDocument();
$doc->loadXML($xml);

// Usar XPath para seleccionar los elementos que necesitas
$xpath = new DOMXPath($doc);
$elements = $xpath->query("/musica/pista");
?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container" id="dades">
    <div class="row mt-5">
      <h1>Fase B.- Llegim fitxers XML i visualitzem les dades </h1>
    </div>
    <div class="row mt-5">
      <div class="form-group">
        <label for="titles">Selecciona un título:</label>
        <select class="form-control" onchange="showImage(this.value)">
          <?php

          // Recorrer cada elemento del archivo XML
          foreach ($elements as $element) {
            // Obtener los valores de cada elemento
            $titol = addslashes($element->getElementsByTagName("Titol")->item(0)->nodeValue);
            $album = addslashes($element->getElementsByTagName("Album")->item(0)->nodeValue);
            $cantant = addslashes($element->getElementsByTagName("Cantant")->item(0)->nodeValue);
            $audio = $element->getElementsByTagName("Audio")->item(0)->nodeValue;
            $portada = $element->getElementsByTagName("Portada")->item(0)->nodeValue;

            echo "<option value='$portada'>$titol</option>";

            /*
                // Insertar los valores en la tabla MySQL
                $sql = "INSERT INTO pistes (data,titol,album,cantant,audio,portada)
                VALUES (now(),'$titol', '$album', '$cantant','$audio','$portada')";
                if (mysqli_query($conn, $sql)) {
                echo "Registro agregado exitosamente";
                } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                */
          }

          // echo "dades gravades" ;
          // Cerrar la conexión a la base de datos
          // mysqli_close($conn);
          ?>


        </select>
      </div>
    </div>
    <div class="row mt-5" id="imageContainer">
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

<!-- Script JavaScript para manejar la interacción -->
<script>
  function showImage(imatge) {
    // Realizar una solicitud AJAX para obtener la imagen correspondiente al título seleccionado
    var codi = '<img src="' + imatge + '" >';
    document.getElementById("imageContainer").innerHTML = codi;
  }
</script>