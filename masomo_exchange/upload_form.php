<!DOCTYPE html>
<html>
<head>
    <title>Upload Resource</title>
</head>
<body>
    <form action="action.php" method="POST">
        <label for="title">Resource Title:</label>
        <input type="text" id="title" name="title" required><br><br>

        <label for="category">Resource Category:</label>
        <select id="category" name="category" required>
            <option value="Notes">Notes</option>
            <option value="Video">Video</option>
            <option value="Source Code">Source Code</option>
        </select><br><br>

        <label for="url">Resource URL:</label>
        <input type="url" id="url" name="url" required><br><br>

        <label for="email">Contributor Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Submit Resource">
    </form>
</body>
</html>
