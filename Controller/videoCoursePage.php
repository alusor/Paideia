<?php
class VideoCoursePage{
    
    public function start(){
        $controller = new pageController;
        $view = file_get_contents("View/vistaVideo.php");
        if(isset($_SESSION)){
            $sidebar = file_get_contents("sidebar.php");
        }else{
            $sidebar = file_get_contents("View/singup.html");
        }
        $view = str_replace("{{sidebar}}",$sidebar,$view);
        $controller->loadHeader();
        $controller->loadMenu();
        echo $view;
        $controller->loadFooter();
    }

}
?>