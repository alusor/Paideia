<?php

    require_once('config.php');
    //Clase controladora de paginas
    class pageController{
        function loadContent($pageToload){
            require_once($pageToload);
        }
        function loadHeader(){
            require_once('View/header.html');
        }   
        function loadFooter(){
            require_once('View/footer.html');
        }
        function loadMenu(){
            require_once('menu.php');
        }
    }
    //Clase que controla todas las operaciones en la base de datos.
    class DataBaseController{
        public $connection;
        function startConnection(){
            $this->connection = new mysqli(HOST,DBUSER,DBPASS,DBNAME);
            if($this->connection->connect_errno){
                echo "Fallo la conexion";
            }
        }
        function userRegister($user,$passwordHash,$email,$role,$name,$last_name,$last_name2){
            $query = "INSERT INTO usuario(usuario,password,email,role,nombre,apellido,apellido2) VALUES('$user','$passwordHash','$email','$role','$name','$last_name','$last_name2')";
            if($this->connection->query($query)===TRUE){
                return true;
            }else{
                return false;
            }
        }
        function userLogin($user,$passwordHash){
            SesionManager::userSessionStart();
        }
        function getCoursesList(){}
        function getUserCourses(){}

    }
    //Clase para controlar las sesiones
    class SesionManager{
        public static function userSessionStart(){
            echo "inicio sesion";
        }
        public static   function userSessionEnd(){
            echo "close";
        }
    }

?>