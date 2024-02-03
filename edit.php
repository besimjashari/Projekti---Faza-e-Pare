<?php
$userId = $_GET['id'];
include_once 'UserRepository.php';



$userRepository = new UserRepository();

$user  = $userRepository->getUserById($userId);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
        height: 100vh;
    }

    form {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    input {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    h3 {
        text-align: center;
    }

    </style>
<body>
    <h3>Edit User</h3>
    <form action="" method="post">
        <input type="text" name="name" placeholder="name" value="<?=$user['name']?>"> <br> <br>
        <input type="text" name="email" placeholder="email" value="<?=$user['email']?>"> <br> <br>
        <input type="text" name="usern" placeholder="username" value="<?=$user['username']?>"> <br> <br>

        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['usern'];

    $userRepository->updateUser($userId,$name,$email,$username);
    header("location:dashboard.php");
}


?>