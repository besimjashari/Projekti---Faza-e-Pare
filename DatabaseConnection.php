<?php
class DatabaseConnection{
    
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "projektiweb";

function startConnection(){
    try{
        $conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if(!$conn){
            echo "Connection failed "; 
            return null;
        }else{
           echo "Connection successful!";
           return $conn;
        }
        
    }catch(PDOException $e){
        echo "Connection failed ". $e->getMessage();
        return null;
    }
}
}
?>