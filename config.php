<?php
$servername = "mysql";
$username = "root";
$password = "example";
$dbname = "exampledb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
