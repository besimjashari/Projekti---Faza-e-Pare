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
            background-color: rgba(255, 255, 255, 0.796);
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
    <form action="login_code.php" method="POST">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <div class="fund">
            <a href="register.php">Register</a>
            <button type="submit" onclick="validateForm()">Login</button>
        </div>
    </form>

    <script>
        function validateForm() {
            var name=document.getElementById('username').value;
            var password=document.getElementById('password').value;

            var nameRegex=/^[a-zA-Z\s]+$/;
            if (!nameRegex.test(name)) {
                alert('Please enter a valid name!');
                return false;
            }
            
            if (password.length<6) {
                alert('Please enter a longer password!');
                return false;
            }
        }


    </script>
    
</body>
</html>