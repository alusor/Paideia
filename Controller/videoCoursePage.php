<?php
class VideoCoursePage{
    public function start(){
        $view = file_get_contents("View/vistaVideo.php");
        $sidebar = file_get_contents("sidebar.php");
        $view = str_replace("{{sidebar}}",$sidebar,$view);
        echo $view;
    }

}
?>