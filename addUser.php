<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link rel="stylesheet" href="style.css">
    
    <title>Add User</title>
</head>
<body>

    <div class="center">
        <form action="addUserBackend.php" method="post">
            <h5>Your Credentials</h5>
            <input type="text" name="masterUserName" placeholder="Your User Name">
            <input type="password" name="masterPasswd" placeholder="Your Passwd">
            <br><br><br>
            <h5>New User</h5>
            <input type="text" name="newUserName" placeholder="New User Name">
            <input type="password" name="newPasswd" placeholder="New Password">
            <input type="password" name="newPasswdAgain" placeholder="New Password Agian">
            <button type="submit">Add User</button>
        </form>
    </div>

    <?php
        session_start();
        if($_SESSION['loggedin'] !== true){
            header("Location: login.php?login=notLoggedIn");
        } 

        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        if(strpos($fullUrl, "addUser=passwdNotEqual")){
            echo "<h5 class='center error'>The two new passwords are not equal.</h5>";
        }elseif(strpos($fullUrl, "addUser=incorrect")){
            echo "<h5 class='center error'>The master username or password are wrong.</h5>";
        }elseif(strpos($fullUrl, "addUser=success")){
            echo "<h5 class='center success'>The new user was added!</h5>";
        }
    ?>

</body>
</html>