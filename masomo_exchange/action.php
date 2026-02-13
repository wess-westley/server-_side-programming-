<?php
// Capture form data
$title = $_POST['title'];
$category = $_POST['category'];
$url = $_POST['url'];
$email = $_POST['email'];

// Validation
$errors = [];

// Check title length
if (strlen($title) < 5) {
    $errors[] = "Resource Title must be at least 5 characters long.";
}

// Check email format
if (strpos($email, '@') === false || !str_ends_with($email, ".ac.ke")) {
    $errors[] = "Email must contain '@' and end with '.ac.ke'.";
}

// Display results
if (empty($errors)) {
    echo "<h3>Resource Submitted Successfully!</h3>";
    echo "<p>Title: $title</p>";
    echo "<p>Category: $category</p>";
    echo "<p>URL: $url</p>";
    echo "<p>Contributor Email: $email</p>";
} else {
    echo "<h3>Validation Errors:</h3>";
    foreach ($errors as $error) {
        echo "<p style='color:red;'>$error</p>";
    }
}
?>
