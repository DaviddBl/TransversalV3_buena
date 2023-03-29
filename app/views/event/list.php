<!-- //conexion a db y funciones declaradas con metodos para invocar en otros archivos php -->
<?php
require ('../app/config.php');
// Crea la consulta SQL para obtener los datos de la tabla
$sql = "SELECT * FROM vista_detalle_eventos";

// Ejecuta la consulta y guarda los resultados en una variable
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Crea una matriz para guardar los resultados
    $rows = array();
    // Recorre las filas de resultados y guarda los datos en la matriz
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
} else {
    echo "No se encontraron resultados.";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listamos los eventos para comun y promotor</h1>
</body>
</html>