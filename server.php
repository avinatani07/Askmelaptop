<?php
// Connect to database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Process form data
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];

// Insert data into database
$sql = "INSERT INTO users (name, phone, email) VALUES ('$name', '$phone', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "Data inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
