<?php
// Start the session
session_start();

// Check if the 'view_count' session variable is set
if (isset($_SESSION['view_count'])) {
    // Increment the view count
    $_SESSION['view_count']++;
} else {
    // Initialize the view count
    $_SESSION['view_count'] = 1;
}

// Get the current view count
$view_count = $_SESSION['view_count'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page View Counter</title>
</head>
<body>
    <h2>Page View Counter</h2>
    <p>This page has been viewed <?php echo htmlspecialchars($view_count); ?> times.</p>
</body>
</html>
