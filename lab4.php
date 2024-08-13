<?php
// File path (change this to the path of your file)
$file_path = 'lab4.txt';

// Check if the file exists
if (file_exists($file_path)) {
    // Open the file for reading
    $file = fopen($file_path, 'r');
    
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr><th>Line Number</th><th>Content</th></tr>";
    
    $line_number = 1;
    
    // Read up to 3 lines from the file
    while (($line = fgets($file)) !== false && $line_number <= 3) {
        echo "<tr>";
        echo "<td>{$line_number}</td>";
        echo "<td>" . htmlspecialchars($line) . "</td>";
        echo "</tr>";
        
        $line_number++;
    }
    
    echo "</table>";
    
    // Close the file
    fclose($file);
} else {
    echo "File not found.";
}
?>
