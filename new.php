<?php
// Replace these with your database credentials
$hostname = "localhost";
$database = "your_database";
// $username = "your_username";
// $password = "your_password";

// Create a database connection
$mysqli = new mysqli($hostname, $username, $password, $database);

// Check for connection errors
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM your_table_name";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row['name'] . "<br>";
        echo "Email: " . $row['email'] . "<br><br>";
    }
} else {
    echo "No data found.";
}

// Close the database connection
$mysqli->close();
?>
