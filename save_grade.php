<?php
$student_id = $_POST['student_id'];
$grade = $_POST['grade'];

$conn = new mysqli(
    'gradesdb.ch0wcao8qnbv.us-east-2.rds.amazonaws.com',
    'admin',
    'password123',
    'gradesdb'
);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO student_grades (student_id, grade) VALUES (?, ?)");
$stmt->bind_param("sd", $student_id, $grade);
$stmt->execute();

$stmt->close();
$conn->close();

header("Location: view_grades.php");
exit();
?>
