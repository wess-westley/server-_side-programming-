<?php

$fullname = $_POST['fullname'];
$student_id = $_POST['student_id'];
$category = $_POST['category'];
$description = $_POST['description'];

$errors = [];

if (empty($student_id)) {
    $errors[] = "Student ID cannot be empty.";
}

if (strlen($description) < 20) {
    $errors[] = "Impact Description must be at least 20 characters.";
}

if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p style='color:red;'>$error</p>";
    }
} else {
    echo "<h3>Submission Summary</h3>";
    echo "Name: $fullname <br>";
    echo "Student ID: $student_id <br>";
    echo "Category: $category <br>";
    echo "Description: $description <br>";
}
?>