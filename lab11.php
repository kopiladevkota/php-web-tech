<?php
// Check if the required query parameters are set
if (isset($_GET['name']) && isset($_GET['age'])) {
    $name = htmlspecialchars($_GET['name']);
    $age = htmlspecialchars($_GET['age']);
    
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Received Data</title>
    </head>
    <body>
        <h2>Received Details</h2>
        <p>Name: " . $name . "</p>
        <p>Age: " . $age . "</p>
    </body>
    </html>";
} else {
    echo "No data received.";
}
?>
