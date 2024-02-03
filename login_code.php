<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once 'UserRepository.php';
    $userRepository = new UserRepository();

    $username = $_POST['username'];
    //$password = $_POST['password'];
    $pwd = $_POST['password'];
    $password = MD5($pwd);

    $authenticatedUser = $userRepository->authenticateUser($username, $password);

    if ($authenticatedUser) {
        $_SESSION['username'] = $authenticatedUser['username'];
        $_SESSION['role'] = $authenticatedUser['role'];

        header("location: home.php");
    } else {
        header("location: login.php?error=kycu_bos");
    }
} else {
    header("location: login.php");
}
?>