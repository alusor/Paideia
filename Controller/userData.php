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
         if(isset($_GET["usuario"])&&isset($_GET["password"])&&isset($_GET["email"])&&isset($_GET["nombre"])&&isset($_GET["apellidop"])&&isset($_GET["apellidom"])){
                    if($_GET["usuario"]!=""&&$_GET["password"]!=""&&$_GET["email"]!=""&&$_GET["nombre"]!=""&&$_GET["apellidop"]!=""&&$_GET["apellidom"]!=""){
                        require_once("Model/userDataModel.php");
                        $model = new UserDataModel();
                        $model->insertUser($_GET["usuario"],$_GET["password"],$_GET["email"],$_GET["nombre"],$_GET["apellidop"],$_GET["apellidom"]);
                    }
                    else{
                        echo "datos vacios";
                    }
                }
                else{
                    echo "Te falto rellenar datos";
                }
        


    }
}
?>