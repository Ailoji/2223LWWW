<?php

$conn = mysqli_connect("mysql-aitorlopez.alwaysdata.net", "298837", "9@S#9PhTC!s!za%bH62eXXH@", "aitorlopez_179");

// Verificar conexión
if (!$conn) {
die("Conexión fallida: " . mysqli_connect_error());
}

// Seleccionar todos los registros de la tabla "minerals"
$sql = "SELECT * FROM minerals";
$result = mysqli_query($conn, $sql);

// Crear una salida de formato XML con todos los datos
header("Content-Type: text/xml");
echo "<?xml version='1.0' encoding='UTF-8'?>";
echo "<minerals>";

// Recorrer cada fila de resultados
while ($row = mysqli_fetch_assoc($result)) {
echo "<mineral>";
// Recorrer cada columna de la fila
foreach ($row as $field => $value) {
// Crear un elemento para cada columna
echo "<$field>$value</$field>";
}
echo "</mineral>";
}

echo "</minerals>";

// Cerrar conexión a la base de datos
mysqli_close($conn);
