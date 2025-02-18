<?php
// Database Configuration
$host = 'localhost';     // Database Host
$dbname = 'jquery'; // Database Name
$username = 'root';    // Database Username
$password = '';    // Database Password

// Create Connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get Form Data
$email = $_POST['email'];
$password = $_POST['password'];

// Basic Validation
if (empty($email) || empty($password)) {
    echo "Please fill all fields.";
    exit;
}

// SQL Query to Insert Data
$sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close Connection
$conn->close();
?>
