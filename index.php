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
          $page = 'content.php';
        break;
        case 'detalle':
          $page = 'vistaDetalle.php';
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
      $controller->loadContent($page);
      $controller->loadFooter();
    }else{
      $controller->loadHeader();
      $controller->loadContent('startPage.html');
    }
  ?> 