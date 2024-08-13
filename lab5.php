<?php
// Define a hardcoded username and password for simplicity
// In a real application, you should use a database and hash passwords
$valid_username = 'kopiladevkota';
$valid_password = 'kopila7@';

// Get the input values from the form
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Check if the credentials are correct
if ($username === $valid_username && $password === $valid_password) {
    // Redirect to the welcome page
    header('Location: lab5.2.html');
    exit();
} else {
    // Display an error message
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Error</title>
    </head>
    <body>
        <h2>Login Error</h2>
        <p>Invalid username or password. Please <a href="lab5.1.html">try again</a>.</p>
    </body>
    </html>';
}
?>
