<?php
$host = 'localhost';
$username = 'root';
$password = 'doss';  // Replace with your actual MySQL password
$database = 'doss';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
