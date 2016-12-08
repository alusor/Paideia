<?php

class UserDataModel{
    public function insertUser($usuario,$password,$email,$nombre,$apellidop,$apellidom){
        $dbManager =  new DataBaseController();
        $dbManager->startConnection();
        echo $dbManager->userRegister($usuario,$password,$email,1,$nombre,$apellidop,$apellidom);
    }
    public function verifyUser($usuario,$password){
        $dbManager =  new DataBaseController();
        $dbManager->startConnection();
        if($dbManager->userLogin($usuario,$password)){
            echo "correcto";
        }else{
            echo "incorrecto";
        }
    }
    public function makeInstructor(){
        $dbManager = new DataBaseController();
        $dbManager->startConnection();
        $user = $_SESSION['usuario'];
        $query = "UPDATE usuario SET role=2 WHERE usuario = '$user'";
        if($dbManager->queryForUpdate($query)){
            echo "correcto";
            $_SESSION['role'] = 2;
        }else{
            echo "incorrecto";
        }
    }
    public function updatePassword(){
        $dbManager = new DataBaseController();
        $dbManager->startConnection();
        $oldPassword = $_GET['oldpassword'];
        $newPassword = $_GET['password'];
        if(strlen($newPassword)<=6){
            echo "Contraseña muy corta";
            return;
        }else{
            if($dbManager->updatePassword($oldPassword,$newPassword)){
                echo "correcto";
            }else{
                echo "Contraseña incorrecta, intenta de nuevo.";
            }
            
        }
        
        
    }
}
?>