<?php
class UserDataModel{
    public function insertUser(){
                if(isset($_GET["usuario"])&&isset($_GET["password"])&&isset($_GET["email"])&&isset($_GET["nombre"])&&isset($_GET["apellidop"])&&isset($_GET["apellidom"])){
                    if($_GET["usuario"]!=""&&$_GET["password"]!=""&&$_GET["email"]!=""&&$_GET["nombre"]!=""&&$_GET["apellidop"]!=""&&$_GET["apellidom"]!=""&&)
                }
                else{
                    echo "Te falto rellenar datos";
                }
    }
}
?>