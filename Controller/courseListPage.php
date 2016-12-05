<?php

class CourseListPage{
    
    public function start(){
        $controller = new pageController;
        require_once("Model/courseListPageModel.php");
        $model = new CourseListPageModel();
        $view = file_get_contents("View/content.html");
        if(isset($_SESSION)){
            $sidebar = file_get_contents("sidebar.php");
        }else{
            $sidebar = file_get_contents("View/singup.html");
        }
        $view = str_replace("{{sidebar}}",$sidebar,$view);
        $view = str_replace("{{Cursos1}}",$model->returnList(),$view);
        $controller->loadHeader();
        $controller->loadMenu();
        echo $view;
        $controller->loadFooter();
    }
    
}

?>