<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>
<body>
    <h2>Submitted Form Data</h2>
    <?php
    // Check if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the submitted values
        $username = htmlspecialchars($_POST['username']);
        $gender = htmlspecialchars($_POST['gender']);
        $country = htmlspecialchars($_POST['country']);
        
        // Check if any hobbies were selected
        $hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : [];

        // Display the values
        echo "<strong>Username:</strong> $username<br>";
        echo "<strong>Gender:</strong> $gender<br>";
        echo "<strong>Country:</strong> $country<br>";

        // Display hobbies
        echo "<strong>Hobbies:</strong> ";
        if (!empty($hobbies)) {
            echo implode(", ", array_map('htmlspecialchars', $hobbies));
        } else {
            echo "No hobbies selected.";
        }
    } else {
        echo "No data submitted.";
    }
    ?>
</body>
</html>
