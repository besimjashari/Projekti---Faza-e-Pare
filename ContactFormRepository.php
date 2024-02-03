<?php
include_once 'DatabaseConnection.php'; 

class ContactFormRepository {
    private $connection;

    function __construct() {
        $conn = new DatabaseConnection();
        $this->connection = $conn->startConnection();
    }

    function insertContactForm($contactForm) {
        $conn = $this->connection;

        session_start();
        $userid=$_SESSION['user_id'];
        $name = $contactForm->getName();
        $surname = $contactForm->getSurname();
        $email = $contactForm->getEmail();
        $message = $contactForm->getMessage();

        $sql = "INSERT INTO contact_form (user_id,name,surname, email, message) VALUES (?,?,?, ?, ?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$userid,$name,$surname, $email, $message]);

        echo "<script> alert('Contact form data has been inserted successfully!'); </script>";
    }

    function getAllContactForms() {
        $conn = $this->connection;

        $sql = "SELECT * FROM contact_form";

        $statement = $conn->query($sql);
        $contactForms = $statement->fetchAll();

        return $contactForms;
    }

    function getContactFormById($id) {
        $conn = $this->connection;

        $sql = "SELECT * FROM contact_form WHERE id = ?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);

        $contactForm = $statement->fetch();

        return $contactForm;
    }

    function updateContactForm($id, $name,$surname, $email, $message) {
        $conn = $this->connection;

        $sql = "UPDATE contact_form SET name=?,surname=?, email=?, message=? WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$name,$surname, $email, $message, $id]);

        echo "<script>alert('Contact form data has been updated successfully!'); </script>";
    }

    function deleteContactForm($id) {
        $conn = $this->connection;

        $sql = "DELETE FROM contact_form WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('Contact form data has been deleted successfully!'); </script>";
    }
}
?>
