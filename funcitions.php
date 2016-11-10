<?php
class pageController{
    function loadContent($pageToload){
        require_once($pageToload);
    }
    function loadHeader(){
        require_once('header.php');
    }
    function loadFooter(){
        require_once('footer.php');
    }
    function loadMenu(){
        require_once('menu.php');
    }
}

?>