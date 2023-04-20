<?php
// Habilita la visualització dels errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Connexió a la base de dades
$host = "mysql-aitorlopez.alwaysdata.net";
$username = "298837";
$password = "9@S#9PhTC!s!za%bH62eXXH@";
$dbname = "aitorlopez_179";

// Comprova si la connexió és vàlida
$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
die("Conexión fallida: " . mysqli_connect_error());
}

// Consulta per a llegir tots els registres de la taula
$sql = "SELECT * FROM jugadors_acb"; 

// Executa la consulta
$result = $conn->query($sql); 

// Crea un array per a emmagatzemar les dades
$data = array(); 

// Recorre tots els registres i els afegeix a l'array de dades
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

//la connexió a la base de dades
$conn->close();

// Defineix el nom del fitxer i la capçalera JSON
/* $filename = "sortida.json";
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Content-Type: application/json');  */

// Escriu les dades JSON a la sortida
//echo json_encode(array("data" => $data), JSON_PRETTY_PRINT);

$json = json_encode($data);
echo $json;


// Define el array que deseas guardar

// Serializa el array y guárdalo en un archivo
file_put_contents('miarray.txt',serialize($json) );
