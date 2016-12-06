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
            $_SESSION['usuario'] = $usuario;
            echo "correcto";
        }else{
            echo "incorrecto";
        }
    }
}
?>