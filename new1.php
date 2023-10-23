<?php
// Replace these with your database credentials
$hostname = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database";

// Create a database connection
$mysqli = new mysqli($hostname, $username, $password, $database);

// Check for connection errors
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Retrieve data from the form
$name = $_POST['name'];
$email = $_POST['email'];

// Insert data into the database
$sql = "INSERT INTO your_table_name (name, email) VALUES (?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ss", $name, $email);
$stmt->execute();

// Close the database connection
$mysqli->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Inserted</title>
</head>
<body>
    <h1>Data Inserted Successfully</h1>
    <a href="new.php">View Data</a>
</body>
</html>
