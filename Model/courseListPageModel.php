<?php

class CourseListPageModel{

    public function returnList(){
        $contenido = "";
       for($i = 0; $i<11;$i++){
           
           $contenido = $contenido . "<div class='cartaCurso'>";
           $contenido = $contenido . "<div class='tituloCarta'>";
           $contenido = $contenido . "<img src='img/tutorial.png'>";
           $contenido = $contenido . "</div>";
           $contenido = $contenido . "<div class='contenidoCarta'>";
           $contenido = $contenido . "<h1>Curso demo</h1>";
           $contenido = $contenido . "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis eos possimus, sunt quo itaque voluptatum non amet sapiente harum, numquam quos sed quibusdam qui totam rem dolore maiores magnam eum.";
           $contenido = $contenido . "</div>";
                        
           $contenido = $contenido . "<a href='index.php?page=detalle' class='incripcion'>Ir al curso <i class='fa fa-angle-right' aria-hidden='true'></i></a>";
           $contenido = $contenido . "</div>";
           
       } 
    return $contenido;
    }

}

?>