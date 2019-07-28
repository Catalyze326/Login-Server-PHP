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

    <title>Dashboard</title>
</head>
<body>
    

    <?php
        session_start();
        if($_SESSION['loggedin'] !== true){
            header("Location: login.php?login=notLoggedIn");
        } 
        
        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        
        if(strpos($fullUrl, "login=Success")){
            echo '<h5 class="center success">You sucessfully logged in!</h5>';
        }
    ?>

    <div class="center">
        <br><br><br>
        <a href="addUser.php">Add User</a>
        <br><br>
        <a href="runCode.php">Run Code</a>
    </div>


</body>
</html>