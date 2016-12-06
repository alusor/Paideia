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
            $passwordHash = password_hash($passwordHash, PASSWORD_DEFAULT);
            $query = "INSERT INTO usuario(usuario,password,email,role,nombre,apellido,apellido2) VALUES('$user','$passwordHash','$email','$role','$name','$last_name','$last_name2')";
            if($this->connection->query($query)===TRUE){
                $_SESSION['usuario'] = $user;
                echo "correcto";
                
            }else{
                echo "incorrecto";
            }
        }
        function userLogin($user,$passwordHash){
            $query = "SELECT password FROM usuario Where usuario = '$user'";
            $respuesta = $this->connection->query($query);
            $password = $respuesta->fetch_assoc();
            $res =  $password['password'];
            if(password_verify($passwordHash,$res)){
                return true;
            }
            else{
                return false;
            }
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