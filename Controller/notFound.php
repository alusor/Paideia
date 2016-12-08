<?php
class NotFound{
    public function start(){
        $controller = new pageController;
        $controller->loadHeader();
        $view = file_get_contents("View/404.html");
        echo $view;
    }
}
?>