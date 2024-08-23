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
echo "Connected successfully";
// Set parameters and execute
$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$stmt->execute();

INSERT INTO users(name, email, phone) VALUES('$name', '$email', '$phone');
// Prepare and bind
//$stmt = $conn->prepare("INSERT INTO users (name, email, phone) VALUES (?, ?, ?)");
//$stmt->bind_param("sss", $name, $email, $phone);



echo $_POST["name"];

echo "New record created successfully";

$stmt->close();
$conn->close();
?>
