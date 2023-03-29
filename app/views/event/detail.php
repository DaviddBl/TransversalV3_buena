<?php

require('../../config.php');
$id = $_GET['id'];

// Consulta a la base de datos
$sql = "SELECT * FROM vista_detalle_eventos WHERE id_evento = $id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Aquí puedes mostrar los datos recuperados en la página
} else {
    echo "No se encontraron datos para el ID $id";
}
$conn->close();
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

    <H1>Vista detalle evento por ID</H1>
    <h1>Detalle del elemento <?php echo $row['id_evento']; ?></h1>
    <p>Nombre: <?php echo $row['artista_evento']; ?></p>
    <p>Apellido: <?php echo $row['fecha']; ?></p>
    <p>Email: <?php echo $row['id_lugar']; ?></p>
    <p>Rol: <?php echo $row['num_entradas']; ?></p>
</body>

</html>