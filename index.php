<?php
    include_once('funcitions.php');
    $controller = new pageController;
    
    if(isset($_GET['page'])){
      
      $tempPage = $_GET['page'];
      $page;
      switch($tempPage){
        case 'inicio':
          $page = 'content.php';
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
      $controller->loadMenu();
      $controller->loadContent('content.php');
      $controller->loadFooter();
    }
  ?> 