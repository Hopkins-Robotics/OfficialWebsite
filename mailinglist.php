<?php
$email = $_POST["email"];

$host = "localhost";
$dbname = "emails";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    die("Connection error". mysqli_connect_error());
}
try {
    $sql = "INSERT INTO emails (email) 
        VALUES (?);";

    $stmt = mysqli_stmt_init($conn);
    if( ! mysqli_stmt_prepare($stmt,$sql)) {
        die(mysqli_error($conn));
    }
    mysqli_stmt_bind_param($stmt, "s", $email);
    echo "record saved";

} catch (PDOExceptopm $e) {
    die("Submit error" . $e->getMessage());
}
?>