  <!-- //REGISTER CONTROLLER -->

  <?php
  //No funciona si ponemos require(config.php)
  require_once __DIR__ . '/../config.php';
  session_start();

  if (isset($_POST['register'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo_electronico'];
    $contrasena = $_POST['contrasena'];
    $rol = $_POST['id_rol'];

    // Validación de los campos
    if (empty($nombre) || empty($correo) || empty($contrasena)) {
      // Redirigir de vuelta al formulario con un mensaje de error
      header("Location: ../views/user/register.php?error=emptyfields");
      exit();
    } else if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
      // Redirigir de vuelta al formulario con un mensaje de error
      header("Location: ../views/user/register.php?error=invalidmail");
      exit();
    } else {
      // Consulta para insertar el usuario en la base de datos
      $sql = "INSERT INTO usuarios (nombre, correo_electronico, contrasena, id_rol) VALUES (?, ?, ?, ?)";
      $stmt = mysqli_prepare($conn, $sql);
      mysqli_stmt_bind_param($stmt, "sssi", $nombre, $correo, $contrasena, $rol);
      mysqli_stmt_execute($stmt);
      session_start();
      $_SESSION['id_usuario'] = $id_usuario;
      $_SESSION['nombre'] = $nombre;
      $_SESSION['correo_electronico'] = $correo;

      // Redirigir al usuario a la página correspondiente según su rol
      if ($rol == 1) {
        header("Location: ../views/common/home.php");
        exit();
      } else if ($rol == 2) {
        header("Location: ../views/user/dashboard.php");
        exit();
      }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }
