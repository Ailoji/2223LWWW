<?php
// Datos de conexión a la base de datos
$host = "mysql-aitorlopez.alwaysdata.net";
$username = "298837";
$password = "9@S#9PhTC!s!za%bH62eXXH@";
$dbname = "aitorlopez_179";


// Crear conexión
$conn = mysqli_connect($host, $username, $password, $dbname);

// Verificar conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Recoger datos del formulario
$email = $_POST["email"];
$titol = $_POST["titol"];
$album = $_POST["album"];
$cantant = $_POST["cantant"];
$categoria = $_POST["categoria"];
$audio = $_FILES["audio"]["name"];
$portada = $_FILES["portada"]["name"];

// Preparar sentencia SQL
$sql = "INSERT INTO musica (email, titol, album, cantant, categoria, audio, portada)
VALUES ('$email', '$titol', '$album', '$cantant', '$categoria', '$audio', '$portada')";

// Ejecutar sentencia y verificar si se ha ejecutado correctamente
if (mysqli_query($conn, $sql)) {
$html = <<<HTML
<!doctype html>
<html lang="en">
  <head>
    <title>Musica</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="background-color: grey;">
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Nova música afegida exitosament</h2>
                <a href="musicxml.html" type="button" class="btn btn-secondary mt-5" data-dismiss="modal">Nova canço</a>
                <a href="index.html" type="button" class="btn btn-primary mt-5">Pagina principal</a>
        </div>
        </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
HTML;


    echo $html;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Cerrar conexión
mysqli_close($conn);
