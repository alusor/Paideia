<?php

class CourseListPageModel{

    public function returnList(){
        $contenido = "";
        $dbManager =  new DataBaseController();
        $dbManager->startConnection();
        $query = "SELECT * FROM curso";
        $cursos = $dbManager->queryForUpdate($query);
        while ($fila = $cursos->fetch_assoc()) {
            
            $contenido = $contenido . "<div class='cartaCurso'>";
            $contenido = $contenido . "<div class='tituloCarta'>";
            $contenido = $contenido . "<img src='www/img/tutorial.png'>";
            $contenido = $contenido . "</div>";
            $contenido = $contenido . "<div class='contenidoCarta'>";
            $contenido = $contenido . "<h1>". $fila['titulo']. "</h1>";
            $contenido = $contenido . $fila['descripcion'];
            $contenido = $contenido . "<p>Instructor: ". $fila['user']. "</p>";
            if($fila['precio']=='0'){
                $fila['precio'] = "Gratuito";
            }
            $contenido = $contenido . "<p>Costo: ". $fila['precio']. "</p>";
            $contenido = $contenido . "</div>";
            $id = $fila['id'];
            $contenido = $contenido . "<a href='index.php?page=detalle&id=$id' class='incripcion'>Ir al curso <i class='fa fa-angle-right' aria-hidden='true'></i></a>";
            $contenido = $contenido . "</div>";
            //echo    $fila["descripcion"] . $fila['precio'] . $fila['user'];
        }
    return $contenido;
    }

}

?>