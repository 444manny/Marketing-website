<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wifiwork_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';

// Prepare the INSERT statement
$stmt = $conn->prepare("INSERT INTO users (name, email, phone) VALUES (?, ?, ?)");

// Check if the prepare() was successful
if (!$stmt) {
    die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
}

// Bind parameters
$stmt->bind_param("sss", $name, $email, $phone);

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>


