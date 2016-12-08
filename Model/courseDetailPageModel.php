<?php
class CourseDetailPageModel{
    public function getCourseData(){
        $dbManager =  new DataBaseController();
        $dbManager->startConnection();
        $id = $_GET['id'];
        $query = "SELECT titulo,descripcion,user,precio,id FROM curso WHERE id = '$id'";
        $respuesta = $dbManager->queryForUpdate($query);
        return $respuesta->fetch_assoc();
    }
}
?>