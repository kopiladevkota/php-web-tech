<?php
// Set the cookie name and value
$cookie_name = "username";
$cookie_value = "Kopila";

// Set a cookie that expires in 1 day (86400 seconds = 1 day)
setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); // "/" means that the cookie is available in the entire domain

// Inform the user that the cookie has been set
echo "Cookie named '" . $cookie_name . "' has been set with value '" . $cookie_value . "'.<br>";

// Provide a link to the next page to access the cookie
echo '<a href="lab9.2.php">Go to the next page to access the cookie</a>';
?>
