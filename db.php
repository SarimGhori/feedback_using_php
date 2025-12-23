<?php
$conn = mysqli_connect("localhost", "root", "", "feedback_system");

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}
?>
