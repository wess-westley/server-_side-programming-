<!DOCTYPE html>
<html>
<head>
    <title>Eco Track Form</title>
</head>
<body>

<h2>Track Sustainability Action</h2>

<form action="process.php" method="POST">

Full Name:
<input type="text" name="fullname"><br><br>

Student ID:
<input type="text" name="student_id"><br><br>

Action Category:
<select name="category">
    <option>Tree Planting</option>
    <option>Waste Reduction</option>
    <option>Energy Saving</option>
</select><br><br>

Impact Description:
<textarea name="description"></textarea><br><br>

<input type="submit" value="Submit">

</form>

</body>
</html>