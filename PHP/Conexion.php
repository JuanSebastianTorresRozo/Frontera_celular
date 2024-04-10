<?php
class Conexion{

    public function __construct(){}
    
    public function conexion(){
        try{
         
            $username="root";
            $password="";
            $dbname="cst";
            $host="localhost";

            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

            return $conn ;

        }catch(PDOException $mensaje) {
            echo $mensaje->getMessage();
        }
    }
}