<?php
$conn = mysqli_connect("localhost", "loginServer", "NotMyRealPassword", "somewhatAdequateUsers");

if($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}