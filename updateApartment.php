<?php
include "DatabaseConnection.php";
include_once "ApartmentRepository.php";

$apartmentRepository = new ApartmentRepository();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['updateApartment'])) {
    $apartmentId = $_POST['id'];
    $photo = $_POST['photo'];
    $description = $_POST['description'];

    $apartmentRepository->updateApartment($apartmentId, $photo, $description);
    
    header("Location: dashboard.php");
    exit();
} else {
    
    header("Location: dashboard.php");
    exit();
}
?>
