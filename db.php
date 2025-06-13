<?php
$servername = "localhost";
$username = "root";
$password = "Elsql_04";  // Your MySQL root password
$database = "homeserviceapp";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Database connected successfully!";
?>
