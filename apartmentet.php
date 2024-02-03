<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icon Group</title>
    <link rel="stylesheet" href="apartmentet.css">
</head>
<body>
    <?php include 'header.php';?>
    <h2 style="text-align: center;">Këto janë apartmentet tona te lira!</h2>
    <h3 style="text-align: center; margin-top: 20px;">“We shape our buildings;
        thereafter they shape us”
        - Winston Churchill</h3>
    <div class="main">
    <?php
        
        include_once "DatabaseConnection.php";
        include_once "ApartmentRepository.php";

        $apartmentRepository = new ApartmentRepository();
        $apartments = $apartmentRepository->getAllApartments();

        foreach ($apartments as $apartment) {
        ?>
            <div class="llojet">
                <img src="<?php echo $apartment['photo']; ?>" alt="foto">
                <p><?php echo $apartment['description']; ?></p>
            </div>
        <?php
        }
        ?>

    </div>
        </div>

    </div>
    <?php include 'footer.php';?>

    
</body>
</html>