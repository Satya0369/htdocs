<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formdatadb";  // Ensure you're using the correct database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data and escape it to prevent SQL injection
$name = mysqli_real_escape_string($conn, $_POST['name']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$email = mysqli_real_escape_string($conn, $_POST['email']);

// Insert data into the students table
$sql = "INSERT INTO students (name, age, email) VALUES ('$name', '$age', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New student record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
