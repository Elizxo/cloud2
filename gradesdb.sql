CREATE DATABASE gradesdb;

USE gradesdb;

CREATE TABLE student_grades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id VARCHAR(20),
    grade FLOAT
);
