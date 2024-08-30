<?php
$email = $_POST["email"];

$host = "localhost:3306";
$dbname = "juzxkxdv_mailinglist";
$username = "juzxkxdv_illuzzi";
$password = "M3ch@n1z3dMutt0n33r$";

$conn = mysqli_connect($host, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

try {
    $sql = "INSERT INTO emails (email) VALUES (?);";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        die("SQL error: " . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "s", $email);

    // test stuff to see if it works, added extra context
    if (mysqli_stmt_execute($stmt)) {
        echo "Record saved";
    } else {
        die("Execute error: " . mysqli_stmt_error($stmt));
    }

    // close connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

} catch (Exception $e) {
    die("Submit error: " . $e->getMessage());
}
?>