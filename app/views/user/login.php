<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/forms.css">
    <title>Login</title>
    <style>
        .error-message {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- app/controllers/LoginController.php -->
        <form action="../../controllers/LoginController.php" method="post">
            <input type="email" name="correo_electronico" placeholder="Correo electrónico">
            <input type="password" name="contrasena" placeholder="Contraseña">
            <?php if (isset($_GET['error']) && $_GET['error'] == 'emptyfields') : ?>
                <p class="error-message">Por favor, completa todos los campos.</p>
            <?php elseif (isset($_GET['error']) && $_GET['error'] == 'invalidlogin') : ?>
                <p class="error-message">El correo electrónico o la contraseña son incorrectos.</p>
            <?php endif; ?>
            <button type="submit" name="login">Iniciar sesión</button>
        </form>
    </div>

</body>

</html>