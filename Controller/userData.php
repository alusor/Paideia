<?php
class UserData{
    public function start(){
        if(isset($_GET['action'])){
            if($_GET['action']=="registro"){
               $view = file_get_contents("View/registerForm.html");
            }
        }
    echo $view;
    }
}
?>