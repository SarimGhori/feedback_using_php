<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
</head>
<body>

<h2>Feedback Form</h2>

<form method="post" action="save_feedback.php">
    Name: <br>
    <input type="text" name="name" required><br><br>

    Email: <br>
    <input type="email" name="email" required><br><br>

    Message: <br>
    <textarea name="message" required></textarea><br><br>

    <button type="submit">Submit Feedback</button>
</form>

</body>
</html>
