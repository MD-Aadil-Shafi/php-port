<?php

class Database{
    public $con;
    private $servername = 'localhost';
    private $username = "root";
    private $password = "";
    private  $dbname = "portdb";
    
    
    public function __construct(){
        $this->con = mysqli_connect($this->servername, $this->username, $this->password);
        
        if(!$this->con){
            echo "Error, not connected";
        }
        
        $sql = "create database if not exists $this->dbname";
        
        if(mysqli_query($this->con, $sql)){
            //echo 'created';
            
            $this->con = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
            
            $sql = "
            CREATE TABLE IF NOT EXISTS portregister(
            id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(50) NOT NULL,
            email VARCHAR(50) NOT NULL,
            msg VARCHAR(255) NOT NULL
            );
            ";
            
            if(!mysqli_query($this->con, $sql)){
                echo "table not created";
            }
            
        }else{
            echo "error, database not found";
        }
    }
    
}
//$obj = new Database;
?>
