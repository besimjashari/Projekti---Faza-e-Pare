<?php 

include "DatabaseConenction.php";
include_once "UserRepository.php";
include_once "ContactFormRepository.php";
include_once "ApartmentRepository.php";



$strep = new UserRepository();
$users = $strep->getAllUsers();

$contactFormRepository = new ContactFormRepository();
$contactForms = $contactFormRepository->getAllContactForms();

$apartmentRepository = new ApartmentRepository(); 

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['insertApartment'])) {
    $photo = $_POST['photo'];
    $description = $_POST['description'];

    session_start();
    $Id = $_SESSION['user_id'];

    $apartmentRepository->insertApartment($photo, $description, $Id);
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
    </head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }

        a:hover {
            color: #0056b3;
        }

        .table-title {
            text-align: center;
            font-size: 20px;
            margin-top: 20px;
        }

        .insert-form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            align-content: center;
        }

    </style>
    <body>
        <a href="home.php" style="border: 2px solid black; padding: 5px; ">Kthehu Pas</a>

        <h2 class="table-title">Tabela e User-it</h2>
        <table border="1">
            <thead>
            <tr>
                <th>Emri</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user) { ?> <!--e hapim foreach-->
                    <tr>
                        <td><?php echo $user['name'];?></td>
                        <td><?php echo $user['email'];?></td>
                        <td><?php echo $user['username'];?></td>
                        <td><?php echo $user['password'];?></td>
                        <td><a href='edit.php?id=<?php echo $user['id']?>'>Edit</a></td> 
                        <td><a href='delete.php?id=<?php echo $user['id']?>'>Delete</a></td>
                    </tr>

                <?php }?> <!--e mbyllim foreach-->
            </tbody>
        </table>

        <h2 class="table-title">Contact Form Table</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($contactForms as $contactForm) { ?>
                    <tr>
                        <td><?php echo $contactForm['name'];?></td>
                        <td><?php echo $contactForm['surname'];?></td>
                        <td><?php echo $contactForm['email'];?></td>
                        <td><?php echo $contactForm['message'];?></td>
                        <td><a href='editContactForm.php?id=<?php echo $contactForm['id']?>'>Edit</a></td> 
                        <td><a href='deleteContactForm.php?id=<?php echo $contactForm['id']?>'>Delete</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <div class="insert-form">
            <h2 class="table-title">Insert New Apartment</h2>
            <form action="" method="post">
                <label for="photo">Photo URL:</label>
                <input type="text" name="photo" required>
                <br>
                <label for="description">Description:</label>
                <textarea name="description" required></textarea>
                <br>
                <input type="submit" name="insertApartment" value="Insert Apartment">
            </form>
        </div>

        <h2 class="table-title">Apartment Table</h2>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Photo</th>
        <th>Description</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $apartments = $apartmentRepository->getAllApartments();
    foreach ($apartments as $apartment) {
    ?>
        <tr>
            <td><?php echo $apartment['id']; ?></td>
            <td><img src="<?php echo $apartment['photo']; ?>" alt="apartment"></td>
            <td><?php echo $apartment['description']; ?></td>
            <td><a href='editApartment.php?id=<?php echo $apartment['id'] ?>'>Edit</a></td>
            <td><a href='deleteApartment.php?id=<?php echo $apartment['id']; ?>'>Delete</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

    </body>
</html>