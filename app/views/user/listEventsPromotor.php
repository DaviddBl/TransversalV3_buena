<?php
session_start();
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
        <h1>Event List Admin</h1>
    </div>

</body>

</html>