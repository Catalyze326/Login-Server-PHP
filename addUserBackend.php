<?php
    session_start();
    include_once "mysql.php";

    $masterUName = $_POST["masterUserName"];
    $masterPasswd = $_POST["masterPasswd"];

    $newUserName = $_POST["newUserName"];
    $newPasswd = $_POST["newPasswd"];
    $newPasswdAgain = $_POST["newPasswdAgain"];

    if($newPasswd !== $newPasswdAgain){
        header("Location: addUser.php?addUser=passwdNotEqual");
        exit();
    }

    $stmt = $conn->prepare("SELECT uName, passwd FROM masterUsers WHERE uName = ? and passwd = ?;");
    $stmt->bind_param("ss", $masterUName, $masterPasswd);
    $stmt->execute();
    $result =  $stmt->get_result();

    if (!$result->num_rows > 0) {
        header("Location: addUser.php?addUser=incorrect");
        exit();
    }

    $stmt = $conn->prepare("INSERT INTO masterUsers (uName, passwd) VALUES (?, ?);");
    $stmt->bind_param("ss", $newUserName, $newPasswd);
    $stmt->execute();
    $result =  $stmt->get_result();

    header("Location: addUser.php?addUser=success");
    exit();
