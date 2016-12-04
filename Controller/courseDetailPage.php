<?php
class CourseDetailPage{
    public function start(){
        $view = file_get_contents("View/vistaDetalle.html");
        $sidebar = file_get_contents("sidebar.php");
        $view = str_replace("{{sidebar}}",$sidebar,$view);
        echo $view;
    }
}
?>