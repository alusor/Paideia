<?php
class NotFound{
    public function start(){
        $view = file_get_contents("View/404.html");
        echo $view;
    }
}
?>