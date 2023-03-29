<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/uiStylesNavSid.css">
    <title>Document</title>
</head>

<body>
    <div class="navbar">
        <?php include '../components/navbar.php'; ?>
    </div>
    <div class="sidebar">
        <?php include '../components/sidebar.php'; ?>
    </div>
    <div class="main-content">
        <!-- Aquí va el contenido principal de tu sitio -->
        <h1>Dashboard</h1>
        <h1>Bienvenido al dashboard, usuario <?php echo $_SESSION['id_usuario']; ?></h1>
        <h1>Bienvenido al dashboard, usuario <?php echo $_SESSION['nombre']; ?></h1>
        <h1>Bienvenido al dashboard, usuario <?php echo $_SESSION['correo_electronico']; ?></h1>
    </div>
    
    <form action="../../controllers/LogoutController.php" method="post">
        <button type="submit" name="logout">Cerrar sesión</button>
    </form>

</body>

</html>