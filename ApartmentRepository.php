<?php
include_once "DatabaseConnection.php";

class ApartmentRepository {
    private $connection;

    function __construct() {
        $conn = new DatabaseConnection();
        $this->connection = $conn->startConnection();
    }

    function insertApartment($photo, $description, $userId)
    {
        $conn = $this->connection;

        $sql = "INSERT INTO apartments (user_id, photo, description) VALUES (?, ?, ?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$userId,$photo, $description]);

        echo "<script> alert('Apartment has been inserted successfully!'); </script>";
    }

    function getAllApartments() {
        $conn = $this->connection;

        $sql = "SELECT * FROM apartments";

        $statement = $conn->query($sql);
        $apartments = $statement->fetchAll();

        return $apartments;
    }

    function getApartmentById($id) {
        $conn = $this->connection;

        $sql = "SELECT * FROM apartments WHERE id = ?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);

        $apartment = $statement->fetch();

        return $apartment;
    }

    function updateApartment($id, $photo, $description) {
        $conn = $this->connection;

        $sql = "UPDATE apartments SET photo=?, description=? WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$photo, $description, $id]);

        echo "<script>alert('Apartment data has been updated successfully!'); </script>";
    }

    function deleteApartment($id) {
        $conn = $this->connection;

        $sql = "DELETE FROM apartments WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('Apartment data has been deleted successfully!'); </script>";
    }
}

?>
