<?php
class CourseDetailPage{
    
    public function start(){
        $controller = new pageController;
        $view = file_get_contents("View/vistaDetalle.php");
        if(isset($_SESSION['usuario'])){
            $sidebar = file_get_contents("sidebar.php");
            $sidebar = str_replace("{{usuario}}",$_SESSION['usuario'],$sidebar);
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