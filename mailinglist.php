<?php
$email = $_POST["email"];

$host = "localhost";
$dbname = "emails";
$username = "root";
$password = "";

$sconn = mysqli_connect($host, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    die("Connection error". mysqli_connect_error());
}

$sql = "INSERT INTO emails (body)
        VALUES ('$email')"
?>