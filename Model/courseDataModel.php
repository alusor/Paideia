<?php
class CourseDataModel{
    public function addCourse(){
        if(isset($_GET['titulo']) && isset($_GET['descripcion']) && isset($_GET['precio'])){
            if($_GET["titulo"]!=""&&$_GET["descripcion"]!=""&&$_GET["precio"]!=""){
            $dbManager =  new DataBaseController();
            $dbManager->startConnection();
            $user = $_SESSION['usuario'];
            $titulo = $_GET['titulo'];
            $descripcion = $_GET['descripcion'];
            $precio = $_GET['precio'];
            $query = "INSERT INTO curso(titulo,descripcion,precio,user) VALUES('$titulo','$descripcion','$precio','$user')";
            if($dbManager->queryForUpdate($query)){
                echo "insertado";
            }
            else {
                echo "No se pudo :C";
            }}
        }
    }
}
?>