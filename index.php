<?php
    include_once('funcitions.php');
    $dbManager =  new DataBaseController;
    $controller = new pageController;
    
    $dbManager->startConnection();
//    if($dbManager->userRegister("eduaardo","a","edda@edd.com",1,"eduardo","velez","santiago")){}
   // $dbManager->userLogin("","");
    //SesionManager::userSessionEnd();

    if(isset($_GET['page'])){
      
      $tempPage = $_GET['page'];
      $page;
      switch($tempPage){
        case 'inicio':
        require_once("Controller/courseListPage.php");
          $getController = new CourseListPage();
        break;
        case 'detalle':
        require_once("Controller/courseDetailPage.php");
          $getController =  new CourseDetailPage();
        break;
        case 'video':
          $page = 'vistaVideo.php';
        break;
        default: $page = '404/404.php';
        $controller->loadContent($page);
        return;
        break;
      }
      $controller->loadHeader();
      $controller->loadMenu();
      $getController->start();  
      //$controller->loadContent($page);
      $controller->loadFooter();
    }else{
      $controller->loadHeader();
      $controller->loadContent('View/startPage.html');
    }
  ?> 