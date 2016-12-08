<?php

//Cadena de conexion en Microsft Azure WebApp Mysql
/*$connectstr_dbhost = '';
$connectstr_dbname = '';
$connectstr_dbusername = '';
$connectstr_dbpassword = '';

foreach ($_SERVER as $key => $value) {
    if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
        continue;
    }
    
    $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}
define("HOST",$connectstr_dbhost);
    define("DBUSER",$connectstr_dbusername);
    define("DBPASS",$connectstr_dbpassword);
    define("DBNAME","paideia");
    */

//http://www.hongkiat.com/blog/skewed-edges-css/
    //Conexcion local
   define('NOMBRE',"Paideia");
   define("DESCRIPCION",'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente facere cumque, saepe porro at repellat, praesentium nobis blanditiis! Magni quis, totam voluptatem inventore explicabo quidem aliquam incidunt accusamus necessitatibus temporibus.');
    define("HOST","localhost");
    define("DBUSER","root");
    define("DBPASS","");
    define("DBNAME","paideia");

?>