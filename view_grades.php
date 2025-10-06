<?php
$conn = new mysqli(
    'gradesdb.ch0wcao8qnbv.us-east-2.rds.amazonaws.com',
    'admin',
    'password123',
    'gradesdb'
);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT student_id, grade FROM student_grades");
$avg_result = $conn->query("SELECT AVG(grade) AS average FROM student_grades");
$avg_row = $avg_result->fetch_assoc();
$average = $avg_row['average'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>All Grades</title>
</head>
<body>
    <h2>All Student Grades</h2>
    <table border="1" cellpadding="8">
        <tr><th>Student ID</th><th>Grade</th></tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['student_id']); ?></td>
                <td><?php echo htmlspecialchars($row['grade']); ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
    <h3>Average Grade: <?php echo number_format($average, 2); ?></h3>
</body>
</html>
<?php
$conn->close();
?>
