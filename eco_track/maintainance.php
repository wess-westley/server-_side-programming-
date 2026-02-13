<?php
$currentHour = date("H");

if ($currentHour >= 0 && $currentHour < 2) {
    echo "<p style='color:red;'>System Maintenance</p>";
} else {
    echo "<p style='color:green;'>System Active</p>";
}
?>