<?php
class CourseDetailPage{
    
    public function start(){
        $controller = new pageController;
        $view = file_get_contents("View/courseDetailView.html");
        require_once("Model/courseDetailPageModel.php");
        $model = new CourseDetailPageModel();
        $courseData =  $model->getCourseData();
        if(isset($_SESSION['usuario'])){
            $sidebar = file_get_contents("View/sidebar.html");
            $sidebar = str_replace("{{usuario}}",$_SESSION['usuario'],$sidebar);
            $sidebar = str_replace("{{cursos}}","Aun no tienes cursos",$sidebar);
            
        }else{
            $sidebar = file_get_contents("View/singup.html");
            
        }
        $view = str_replace("{{sidebar}}",$sidebar,$view);
        $view = str_replace("{{titulo}}",$courseData['titulo'],$view);
        $view = str_replace("{{descripcion}}",$courseData['descripcion'],$view);
        $view = str_replace("{{autor}}",$courseData['user'],$view);
        if($courseData['precio']=='0'){
            $courseData['precio'] = "Gratuito";
        }
        $view = str_replace("{{costo}}",$courseData['precio'],$view);
        $view = str_replace("{{id}}",$courseData['id'],$view);
        $controller->loadHeader();
        $controller->loadMenu();
        echo $view;
        $controller->loadFooter();
    }
}
?>