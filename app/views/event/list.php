<!-- //conexion a db y funciones declaradas con metodos para invocar en otros archivos php -->
<?php
require('../../config.php');
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
    <div class="navbar">
        <?php include '../components/navbar.php'; ?>
    </div>
    <div>
        <div class="sidebar">
            <?php include '../components/sidebar.php'; ?>
        </div>
    </div>
    <div class="main-content">
        <h1>Listamos los eventos para comun y promotor</h1>
        <div>
            <h1>Vistas Eventos Imagenes</h1>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Artista</th>
                        <th>Fecha</th>
                        <th>ID LUGAR</th>
                        <th>Numero de entradas</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    //bucle para almacenar los datos de la db en la variable row y mostrarlos 
                    foreach ($rows as $row) : ?>
                        <tr>
                            <td><?php echo $row['id_evento']; ?></td>
                            <td><?php echo $row['artista_evento']; ?></td>
                            <td><?php echo $row['fecha']; ?></td>
                            <td><?php echo $row['id_lugar']; ?></td>
                            <td><?php echo $row['num_entradas']; ?></td>
                            <td><a href="../app/views/event/detail.php?id=<?php echo $row['id_evento']; ?>"><?php echo $row['id_evento']; ?></a></td>
                            <!-- detail.php?id= -->
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="sidebar">
        <?php include '../components/sidebar.php'; ?>
    </div>
</body>

</html>