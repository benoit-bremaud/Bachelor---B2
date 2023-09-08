<?php
// Function to establish a database connection
function connectToDatabase() {
    $hostname = "localhost"; // Replace with your database hostname
    $username = "root"; // Replace with your database username
    $password = "motdepasse1@"; // Replace with your database password@
    $database = "lp_official"; // Replace with your database name

    // Create a new MySQLi object
    $conn = new mysqli($hostname, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>
