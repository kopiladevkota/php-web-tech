<?php
// Database configuration
$servername = "localhost";
$username = "root"; // default XAMPP MySQL username
$password = ""; // default XAMPP MySQL password
$dbname = "student_db";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$gender = $_POST['gender'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO students (name, address, phone, age, gender) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssis", $name, $address, $phone, $age, $gender);

// Execute the statement
if ($stmt->execute()) {
    echo "New student record created successfully.";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
