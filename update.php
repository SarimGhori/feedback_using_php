<?php
include "db.php";

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

mysqli_query($conn, 
"UPDATE feedback SET 
 name='$name',
 email='$email',
 message='$message'
 WHERE id=$id");

header("Location: admin.php");
?>
