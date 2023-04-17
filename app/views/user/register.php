<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/forms.css">
    <style>
        .error-message {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- app/controllers/UserController.php -->
        <form action="../../controllers/UserController.php" method="post">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="email" name="correo_electronico" placeholder="Correo electrónico">
            <input type="password" name="contrasena" placeholder="Contraseña">
            <select name="id_rol">
                <option value="1">Común</option>
                <option value="2">Promotor</option>
            </select>
            <?php if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfields") {
                    echo "<p class='error-message'>Por favor, rellene todos los campos.</p>";
                } else if ($_GET['error'] == "invalidmail") {
                    echo "<p class='error-message'>Por favor, introduzca una dirección de correo válida.</p>";
                } else if ($_GET['error'] == "emailtaken") {
                    echo "<p class='error-message'>La dirección de correo electrónico ya está en uso.</p>";
                }
            } ?>
            <button type="submit" name="register">Registrarse</button>
        </form>
    </div>
</body>

</html>