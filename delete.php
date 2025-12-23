<?php
include "db.php";

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM feedback WHERE id=$id");

header("Location: admin.php");
?>
