<?php
include("config.php");

date_default_timezone_set("Africa/Nairobi");
$timestamp = date("Y-m-d H:i:s");

echo "<h2>Welcome to $universityName Eco-Track Portal</h2>";
echo "<p>Your visit time: $timestamp</p>";
?>