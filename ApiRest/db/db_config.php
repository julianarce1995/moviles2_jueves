<?php
class DBConfig{

    private $user = "root";
    private $password = "";
    private $dbName = "delivery_app";
    private $host = "localhost";

    public function connect(){
        try{
            $dsn = "mysql:host=$this->host;dbname=$this->dbName";
            $connection = new PDO($dsn,$this->user, $this->password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexión exitosa";
        }catch(PDOException $exception){
            echo "Error en la db". $exception->getMessage();
        }
    }
}