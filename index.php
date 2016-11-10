<?php
    include_once('funcitions.php');
    include_once('header.php');
    $controller = new pageController;
    
    if(isset($_GET['page'])){
      
      $tempPage = $_GET['page'];
      $page;
      switch($tempPage){
        case 'inicio':
          $page = 'content.php';
        break;
        default: $page = '404.php';

        break;
      }
      $controller->loadContent($page);
    }else{
      $controller->loadContent('content.php');
    }
    
    include_once('footer.php');
  ?> 