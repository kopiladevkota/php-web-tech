<?php
// Check if the cookie is set
if(isset($_COOKIE['username'])) {
    echo "Cookie 'username' is set!<br>";
    echo "Value is: " . $_COOKIE['username'];
} else {
    echo "Cookie 'username' is not set.";
}
?>
