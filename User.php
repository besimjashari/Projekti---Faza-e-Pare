<?php

class User{
    private $id;
    private $name;
    private $email;
    private $username;
    private $password;

    private $role;


    function __construct($name,$email,$username,$password){
            
            $this->name = $name;
            $this->email = $email;
            $this->username = $username;
            $this->password = $password;
    }

    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getRole(){
        return $this->role;
    }
    public function setId($e){
        $this->id = $e;
    }
    public function setName($e){
        $this->name = $e;
    }
    public function setEmail($e){
        $this->email = $e;
    }
    public function setUsername($e){
        $this->username = $e;
    }
    public function setPassword($e){
        $this->password = $e;
    }
    public function setRole($e){
        $this->role = $e;
    }
    

}

?>
