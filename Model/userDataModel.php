<?php

class UserDataModel{
    public function insertUser($usuario,$password,$email,$nombre,$apellidop,$apellidom){
        $dbManager =  new DataBaseController;
        $dbManager->startConnection();
        echo $dbManager->userRegister($usuario,$password,$email,1,$nombre,$apellidop,$apellidom);
    }
}
?>