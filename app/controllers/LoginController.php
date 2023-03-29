<?php
require __DIR__ . '/../config.php';

session_start();

if (isset($_POST['login'])) {
    $correo = $_POST['correo_electronico'];
    $contrasena = $_POST['contrasena'];

    // Validación de los campos
    if (empty($correo) || empty($contrasena)) {
        // Redirigir de vuelta al formulario con un mensaje de error
        header("Location: ../views/user/login.php?error=emptyfields");
        exit();
    } else {
        
        // Consulta para buscar el usuario en la base de datos
        $sql = "SELECT id_usuario, nombre, id_rol FROM usuarios WHERE correo_electronico = ? AND contrasena = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $correo, $contrasena);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        // Si se encontró un usuario, redirigir a la página correspondiente según su rol
        if (mysqli_stmt_num_rows($stmt) == 1) {
            mysqli_stmt_bind_result($stmt, $id_usuario, $nombre, $id_rol);
            mysqli_stmt_fetch($stmt);
            session_start();
            $_SESSION['id_usuario'] = $id_usuario;
            $_SESSION['nombre'] = $nombre;
            $_SESSION['correo_electronico'] = $correo;


            if ($id_rol == 1) {
                // Redirigir a la página de inicio común
                header("Location: ../views/common/home.php");
                exit();
            } else if ($id_rol == 2) {
                // Redirigir al dashboard del usuario
                header("Location: ../views/user/dashboard.php");
                exit();
            }
        } else {
            // Redirigir de vuelta al formulario con un mensaje de error
            header("Location: ../views/user/login.php?error=invalidlogin");
            exit();
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
