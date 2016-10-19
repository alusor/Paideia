<?php
    require_once("../config/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo NOMBRE." " ?> Dashboard</title>
    <!--<link rel="stylesheet" href="<?php echo CSS?>style.css">-->
    <script src="https://use.fontawesome.com/9ed3df259b.js"></script>
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
                <li> <a href=""> <span class="fa fa-home fa-2x">  </span>Inicio</a></li>
                <li><a href="">Cursos</a></li>
                <li><a href="">Preguntas</a></li>
                <li><a href="">Perfil</a></li>
                <li><a href="">Cerrar sesión</a></li>
            </ul>
        </nav>
        
    </aside>
    <main>
    <h1>Panel de instructor</h1>
    <nav class="opciones">
    <a class="tarjeta" href="#">
        
            <h1><i class="fa fa-plus-circle fa-3x"></i></h1>
            <p>Agregar curso</p>
    </a>
        <div class="tarjeta">
        
            <h1><i class="fa fa-edit fa-3x"></i></h1>
            <p>Editar</p>
        </div>
        <div class="tarjeta">
        
            <h1><i class="fa fa-minus-circle fa-3x"></i></h1>
            <p>Dar de baja curso</p>
        </div>
        <div class="tarjeta">
            <h1><i class="fa fa-cog fa-3x"></i></h1>
            <p>Configuración</p>
            
        </div>
        <div class="tarjeta">
        
            <h1><i class="fa fa-ticket fa-3x"></i></h1>
            <p>Crear cupón</p>
        </div>
        <a class="tarjeta" href="#">
        
            <h1><i class="fa fa-envelope fa-3x"></i></h1>
            <p>Crear anuncío</p>
        </a>
        </nav>
        
    </main>
</body>
</html>