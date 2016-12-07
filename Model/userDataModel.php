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
        $query = "UPDATE usuario SET role=2 WHERE usuario = '$_SESSION['usuario']'"
        if($dbManager->queryForUpdate($query)){

        }
    }
}
?>