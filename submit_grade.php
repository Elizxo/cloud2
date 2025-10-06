<!DOCTYPE html>
<html>
<head>
    <title>KSU Grade Entry</title>
</head>
<body>
    <h2>Enter Student Grade</h2>
    <form action="save_grade.php" method="POST">
        Student ID: <input type="text" name="student_id" required><br><br>
        Grade: <input type="number" step="0.01" name="grade" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
