<?php

class CourseListPage{

    public function start(){
        require_once("Model/courseListPageModel.php");
        $model = new CourseListPageModel();
        $sidebar = file_get_contents("sidebar.php");
        $view = file_get_contents("View/content.html");
        $view = str_replace("{{sidebar}}",$sidebar,$view);
        $view = str_replace("{{Cursos1}}",$model->returnList(),$view);
        echo $view;
    }
    
}

?>