<!DOCTYPE html>
<?php
    require_once('config.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo NOMBRE;  ?></title>
    <script src="https://use.fontawesome.com/9ed3df259b.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <div class="navbar">
                    <div class="marca">
                        <?php echo NOMBRE;  ?>
                    </div>
                    <div class="menu">
                        <a href="index.php">Inicio</a>
                        <a href="vistaDetalle.php">Detalles</a>
                        <a href="vistaVideo.php">Video</a>
                        <a href="">Menu</a>
                        <a href="">Menu</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>