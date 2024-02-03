<?php 
    session_start();
    if(!isset($_SESSION['username'])){
        header("location:login.php");
        exit();
    }else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icon Group</title>
    <style>
        *{
            margin: 0px;
        }

        nav{
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 10vh;

        }
        .logo{
            display: flex;
            align-items: center;
            font-family: 'Montserrat', sans-serif;
            
        }

        .faqet a{
            padding: 0px 5px;
            text-decoration: none;
            color: black;
            font-family: 'Montserrat', sans-serif;
            
        }
        .faqet a:hover{
            font-size: larger;
            font: bolder;
        }
    </style>
</head>
<body>
    
    <nav>
        <div class="logo">
            <img src="foto/download2.jpg" alt="logo" width="50px">
            <span style="padding-left: 10px;">ICON GROUP</span></div>
        <div class="faqet">
            <a href="home.php">KRYEFAQJA</a>
            <a href="apartmentet.php">APARTMENTET</a>
            <a href="perne.php">PËR NE</a>
            <a href="kontakto.php">NA KONTAKTO</a>
            <a href="tipet.php">TIPET</a>
            <?php
                if(isset($_SESSION['username']) && $_SESSION['role'] == "1") {
                    echo '<a href="dashboard.php">DASHBOARD</a>';
                }
            ?>
            <a href="logout.php">Log Out</a>
            
        </div>
        
    </nav>
    
</body>
</html>
<?php } ?>