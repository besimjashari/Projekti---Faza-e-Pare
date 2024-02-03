<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icon Group</title>
</head>
<style>
    form{
    display: flex;
    flex-direction: column;
    width: 300px;
    }
    input{
        margin-top:10px ;
        height: 25px;
    }
    .posht-main{
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        padding: 10px;
        margin-bottom: 10px;
    }
    @media screen and (max-width: 600px) {
        .posht-main{
            flex-direction: column;
            align-items: center;
        }
    }

    #mesazhi{
        height: 200px;
    }
    button{
        width: min-content;
        margin-top: 10px;
        background-color: white;
        padding: 5px;
        font-size: larger;
    }
    button:hover{
        border: 2px solid red;
        color: red;
    }
</style>
<body>
    
    <?php include 'header.php';?>
    
     <br>
        <div class="posht-main">
            <div class="text">
                <h3>Keni Pyetje?</h3>
                <i>
                    Na shkruani ketu per çdo bashkupunim apo 
                    paqartesi qe keni,
                    <br>
                    Ne jemi te hapur te bisedojme.
                </i>
            </div>
            <div class="kontakt">
                <form action="contactform_code.php" method="POST">
                    <input type="text" id="emri" name="name" placeholder="Emri" required>
                    <input type="text"  id="mbiemri" name="surname" placeholder="Mbiemri" required>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                    <input type="text" id="mesazhi" name="msg" placeholder="Mesazhi juaj!" required>
                    <button type="submit" onclick="validateForm()">Dergo</button>
                </form>
            </div>
        </div>
    </div>

    <?php include 'footer.php';?>
   


    <script>
        function validateForm() {
            var name=document.getElementById('emri').value;
            var email=document.getElementById('email').value;
            var message=document.getElementById('mesazhi').value;

            var nameRegex=/^[a-zA-Z\s]+$/;
            if (!nameRegex.test(name)) {
                alert('Ju lutem shenoni nje emer!');
                return false;
            }
            var emailRegex=/^[^\s@]+@[^\s@]+\.+[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Sheno nje email valid!');
                return false;
            }
            if(message.length<5){
                alert('Ju lutem shenoni nje mesazh me te gjate!')
                return false;
            }
            
        }


    </script>
    
</body>
</html>