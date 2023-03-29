<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <!-- app/controllers/LoginController.php -->
    <form action="../../controllers/LoginController.php" method="post">
        <input type="email" name="correo_electronico" placeholder="Correo electrónico">
        <input type="password" name="contrasena" placeholder="Contraseña">
        <button type="submit" name="login">Iniciar sesión</button>
    </form>

</body>

</html>