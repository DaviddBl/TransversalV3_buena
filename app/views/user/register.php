<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- app/controllers/UserController.php -->
    <form action="../../controllers/UserController.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="email" name="correo_electronico" placeholder="Correo electrónico">
        <input type="password" name="contrasena" placeholder="Contraseña">
        <select name="id_rol">
            <option value="1">Común</option>
            <option value="2">Promotor</option>
        </select>
        <button type="submit" name="register">Registrarse</button>
    </form>

</body>

</html>