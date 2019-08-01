<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     
    <title>Login</title>
</head>
<body>
    <div class="center">
        <h3>LOGIN</h3>
        <form action="backend.php" method="post">
            <br><br>
            <input type="text" name="uName" placeholder="User Name">
            <input type="password" name="passwd" placeholder="Password">
            <?php
              require_once('recaptchalib.php');
              $publickey = "6LcbqrAUAAAAANwDw7K-xs6euK7oOmCrFET_FO4E"; 
              echo recaptcha_get_html($publickey);
            ?>
            <br><br>
            <button type="submit" name="submit">Login</button>
    </form>
</div>

<?php
    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if(strpos($fullUrl, "login=Failure")){
        echo "<h5 class='center error'>You're username or password is incorrect</h5>";
    }
?>
</body>
</html>