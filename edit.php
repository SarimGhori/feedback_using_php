<?php
include "db.php";

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM feedback WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card col-md-6 mx-auto shadow">
        <div class="card-header bg-warning">
            <h4>Edit Feedback</h4>
        </div>
        <div class="card-body">
            <form method="post" action="update.php">
                <input type="hidden" name="id" value="<?= $row['id']; ?>">

                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" value="<?= $row['name']; ?>" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" value="<?= $row['email']; ?>" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Message</label>
                    <textarea name="message" class="form-control"><?= $row['message']; ?></textarea>
                </div>

                <button class="btn btn-success">Update</button>
                <a href="admin.php" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
