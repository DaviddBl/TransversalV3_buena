<?php

$servername = "localhost"; // dirección del servidor
$username = "root"; // usuario de la base de datos
$password = ""; // contraseña de la base de datos
$dbname = "eventostansv3"; // nombre de la base de datos

// Crea una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si la conexión fue exitosa
if ($conn->connect_error) {
die("Error al conectarse a la base de datos: " . $conn->connect_error);
}
