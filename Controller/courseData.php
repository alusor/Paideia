<?php
require_once("Model/courseDataModel.php");
class CourseData{
    public function start(){
        if(isset($_GET['action'])){
            switch($_GET['action']){
                case 'agregar':
                $this->agregarCurso();
                break;
            }
        }
    }
    public function agregarCurso(){ 
        $model = new CourseDataModel();
        $model->addCourse();
    }
       
}
?>