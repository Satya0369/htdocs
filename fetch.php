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

// Fetch data from students table
$sql = "SELECT id, name, age, email FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<h2>Students Data</h2>";
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Age</th><th>Email</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["age"] . "</td><td>" . $row["email"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No results found";
}

$conn->close();
?>
