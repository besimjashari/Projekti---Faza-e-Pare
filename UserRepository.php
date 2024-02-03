<?php 
include_once 'DatabaseConnection.php';

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection();
        $this->connection = $conn->startConnection();
    }


    function insertUser($user){

        $conn = $this->connection;

        $name = $user->getName();
        $email = $user->getEmail();
        $username = $user->getUsername();
        $password = $user->getPassword();

        $sql = "INSERT INTO user (name,email,username,password) VALUES (?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$name,$email,$username,$password]);

        echo "<script> alert('User has been inserted successfuly!'); </script>";

    }
    

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM user";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function authenticateUser($username, $password)
    {
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE username=? AND password=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$username, $password]);
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            return $user;
        } else {
            return null; 
        }
    }

    function getUserById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        $user = $statement->fetch();

        return $user;
    }

    function updateUser($id,$name,$email,$username){
         $conn = $this->connection;

         $sql = "UPDATE user SET name=?, email=?, username=? WHERE id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$name,$email,$username,$id]);

         echo "<script>alert('update was successful'); </script>";
    } 

    function deleteUser($id){
        $conn = $this->connection;

        $sql = "DELETE FROM user WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   } 
}



?>