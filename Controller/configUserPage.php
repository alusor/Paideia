<?php
class ConfigUserPage{
    public function start(){
        $controller = new pageController;
        $view = file_get_contents("View/configUser.html");
        if(isset($_SESSION['usuario'])){
            $sidebar = file_get_contents("View/sidebar.html");
            $sidebar = str_replace("{{usuario}}",$_SESSION['usuario'],$sidebar);
            $sidebar = str_replace("{{cursos}}","Aun no tienes cursos",$sidebar);
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