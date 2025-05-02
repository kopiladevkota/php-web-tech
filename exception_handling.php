<?php
function divide($dividend, $divisor) {
    if ($divisor == 0) {
        throw new Exception("Division by zero is not allowed.");
    }
    return $dividend / $divisor;
}

try {
    echo divide(10, 2); // Output: 5
    echo "<br>". divide(10, 0); // This will throw an exception
} catch (Exception $e) {
    // Handle the exception
    echo "<br>Caught exception: " . $e->getMessage();
} finally {
    echo "<br>Execution finished.";
}
?>
