<?php
    require_once("../config/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo NOMBRE." " ?> Dashboard</title>
    <!--<link rel="stylesheet" href="<?php echo CSS?>style.css">-->
        <link rel="stylesheet" href="<?php echo CSS?>commonStyles.css">
    <link rel="stylesheet" href="<?php echo CSS?>dashboardStyle.css">

</head>
<body>
    <aside id="sidebar">
        <div class="header">
            <span class="marca"> <?php echo NOMBRE?> </span>

        </div>
                    <img src="../img/perfil.jpg" />
        <img >
        <nav id="menu">
            <ul>
                <li><a href="">Inicio</a></li>
                <li><a href="">Cursos</a></li>
                <li><a href="">Mensajes</a></li>
                <li><a href="">Configuración</a></li>
                <li><a href="">Salir</a></li>
            </ul>
        </nav>
        
    </aside>
</body>
</html>