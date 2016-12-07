<?php
class UserData{
    public function start(){
        if(isset($_GET['action'])){
            switch($_GET['action']){
                case 'registrar':
                    $this->registerUser();
                break;
                case 'login':
                    $this->login();
                break;
                case 'salir':
                $this->logout();
                break;
                case 'hazInstructor':
                    $this->makeInstructor();
                break;
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
    public function login(){
        if(isset($_GET['usuario'])&&isset($_GET['password'])){
            require_once("Model/userDataModel.php");
            $model = new UserDataModel();
            $model->verifyUser($_GET['usuario'],$_GET['password']);
        }else{
            echo "Rellena los datos correctame";
        }
    }
    public function logout(){
        session_destroy();
    }
    public function makeInstructor(){
        if(isset($_SESSION['usuario'])){
            require_once("Model/UserDataModel.php");
            $model = new UserDataModel();
            $model->makeInstructor();
        }
    }
}
?>