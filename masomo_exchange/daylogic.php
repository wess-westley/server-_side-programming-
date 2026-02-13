<?php
// Get the current day of the week
$today = date("l");

switch ($today) {
    case "Monday":
        echo "Introduction to Server-Side Programming!";
        break;
    case "Tuesday":
        echo "Core Syntax Lab Today!";
        break;
    case "Wednesday":
        echo "Database Integration Workshop!";
        break;
    case "Thursday":
        echo "Form Handling and Validation!";
        break;
    case "Friday":
        echo "Project Work and Review!";
        break;
    default:
        echo "No scheduled class today.";
}
?>
