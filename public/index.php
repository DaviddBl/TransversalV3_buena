<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Home page</h1>
    <a href="../app/views/user/register.php">Register</a>
    <a href="../app/views/user/login.php">Login</a>
    <div>
        <h1>Vistas Eventos Imagenes</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Rol</th>
                </tr>
            </thead>
            <tbody>

                <?php
                // aqui invocamos la function con el metodo include(function.php)
                include('../app/views/event/list.php');
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

</body>

</html>