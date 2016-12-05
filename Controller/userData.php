<?php
class UserData{
    public function start(){
        if(isset($_GET['action'])){
            if($_GET['action']=="registrar"){
               $this->registerUser();
            }
        }
    }
    public function registerUser(){
        require_once("Model/userDataModel.php");
        $model = new UserDataModel();
        $model->insertUser();


    }
}
?>