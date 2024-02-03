<?php
include "DatabaseConnection.php";
include_once "ApartmentRepository.php";

$apartmentRepository = new ApartmentRepository();

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $apartmentId = $_GET['id'];

    $apartmentRepository->deleteApartment($apartmentId);

    header("Location: dashboard.php");
    exit();
} else {
    header("Location: dashboard.php");
    exit();
}
?>
