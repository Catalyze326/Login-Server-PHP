<?php
$conn = mysqli_connect("localhost", "loginServer", "rZZHZ&h&RESig@LGKvx^H1@8W9onNQMURzZqKRg%u", "somewhatAdequateUsers");

if($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}