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

    <title>Run Code </title>
</head>
<body>
    <div class="center"> 
        <h5>You should know the code is run in a vm so I wouldnt waste your time trying to rouin my server.</h5>
        <br><br><br><br>
        <form action="upload.php" method="files" enctype="multipart/form-data">
            <h5>Select pythonFile to upload:</h5>
            <input type="file" name="file" id="file">
            <br><br>
            <input type="submit" value="Upload File" name="submit">
        </form>
    </div>

    <?php
        // $target_dir = "uploads/";
        // $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        // $uploadOk = 1;
        // $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // // Check if image file is a actual image or fake image
        // if(isset($_POST["submit"])) {
        //     if($fileType != "py") {
        //         header("Location: runCode.php?upload=notPY");
        //         exit();
        //     }else{
        //         move_uploaded_file($_FILES["fileToUpload"]["tmp_name"]. $target_file);
        //         header("Location: runCode?upload=Success");
        //     }
        // }
    ?>

<?php
    session_start();
    if($_SESSION['loggedin'] !== true){
        header("Location: login.php?login=notLoggedIn");
    } 

    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    
    // if(strpos($fullUrl, "addUser=passwdNotEqual")){
    //     echo "<h5 class='center error'>The two new passwords are not equal.</h5>";
    // }elseif(strpos($fullUrl, "addUser=incorrect")){
    //     echo "<h5 class='center error'>The master username or password are wrong.</h5>";
    // }elseif(strpos($fullUrl, "addUser=success")){
    //     echo "<h5 class='center success'>The new user was added!</h5>";
    // }
    ?>
</body>
</html>