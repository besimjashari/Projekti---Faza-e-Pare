<?php
include_once 'UserRepository.php';
include_once 'User.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['name'])  || empty($_POST['email']) ||
    empty($_POST['username']) || empty($_POST['password'])){
        echo "Fill all fields!";
    }else{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $pwd = $_POST['password'];
        $password = MD5($pwd);
        $user  = new User($name,$email,$username,$password);
        $userRepository = new UserRepository();

        $userRepository->insertUser($user);

        header('location:login.php');

    }
}

?>