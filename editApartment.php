<?php
include "DatabaseConnection.php";
include_once "ApartmentRepository.php";

$apartmentRepository = new ApartmentRepository();

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $apartmentId = $_GET['id'];
    $apartment = $apartmentRepository->getApartmentById($apartmentId);
} else {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Apartment</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 20px;
}

h2 {
    text-align: center;
    color: #333;
}

form {
    max-width: 600px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 8px;
    color: #333;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

a {
    color: #007BFF;
    text-decoration: none;
}

a:hover {
    color: #0056b3;
}

    </style>
</head>
<body>
    <h2>Edit Apartment</h2>
    <form action="updateApartment.php" method="post">
        <input type="hidden" name="id" value="<?php echo $apartment['id']; ?>">
        <label for="photo">Photo URL:</label>
        <input type="text" name="photo" value="<?php echo $apartment['photo']; ?>" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description" required><?php echo $apartment['description']; ?></textarea>
        <br>
        <input type="submit" name="updateApartment" value="Update Apartment">
    </form>
</body>
</html>
