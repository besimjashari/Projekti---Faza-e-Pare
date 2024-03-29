<?php 
    include_once 'registerController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icon Group</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url("foto/icon nga jashte.png");
            background-size:100% 100%;
        }
        form{
            display: flex;
            flex-direction: column;
            padding: 20px;
            border: 1px solid black;
            border-radius: 2%;
            background-color: white;
            
            font-size: larger;
        }
        form a{
            text-decoration: none;
            color: black;
            font-size: smaller;
        }
        .fund{
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-top: 10px;
        }
        input{
            margin: 7px;
            width: 250px;
            height: 25px;
        }
        button{
            width: min-content;
            align-self: center;
        }
        button:hover{
            border: 2px solid red;
        }
        a:hover{
            color: red;
        }
    </style>
</head>
<body>
    <form action = "<?php echo $_SERVER['PHP_SELF']?>" method = "POST">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email</label>
        <input type="text" id="email" name="email" required>
        <label for="username">Username</label>
        <input type="text" name="username" required>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <label for="confirmPassword">Confirm Password</label>
        <input type="password" id="confirmPassword" required>
        <div class="fund">
            <a href="login.php">Login</a>
            <button type="submit" name="registerBtn" onclick="validateForm()">Register</button>
        </div>
    </form>
    <script>
        function validateForm() {
            var name=document.getElementById('name').value;
            var email=document.getElementById('email').value;
            var password=document.getElementById('password').value;
            var confirmPassword=document.getElementById('confirmPassword').value;

            
            var nameRegex=/^[a-zA-Z\s]+$/;
            if (!nameRegex.test(name)) {
                alert('Please enter a valid name!');
                return false;
            }

            var emailRegex=/^[^\s@]+@[^\s@]+\.+[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email!');
                return false;
            }
            
            if (password.length<6) {
                alert('Please enter a longer password!');
                return false;
            }

            if (confirmPassword!=password) {
                alert('Your password doesnt match!');
                return false;
            }
        }
    </script>
</body>
</html>
