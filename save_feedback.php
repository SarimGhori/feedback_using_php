<?php
include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO feedback (name, email, message) 
        VALUES ('$name', '$email', '$message')";

if (mysqli_query($conn, $sql)) {
    echo "Feedback submitted successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
