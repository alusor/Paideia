<?php
    include_once('funcitions.php');
    include_once('header.php');
    
    
    if(isset($_GET['page'])){
      $controller = new pageController;
      $tempPage = $_GET['page'];
      $page;
      switch($tempPage){
        case 'inicio':
          $page = 'content.php';
        break;

      }
      $controller->loadContent($page);
    }
    
    include_once('footer.php');
  ?> 