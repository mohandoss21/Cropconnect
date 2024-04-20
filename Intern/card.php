<?php
// Database connection parameters
$servername = "localhost"; // Replace with your MySQL server name
$username = "your_username"; // Replace with your MySQL username
$password = "your_password"; // Replace with your MySQL password
$database = "your_database"; // Replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_quantity'])) {
    // Get the product name and new quantity from the form
    $product_name = $_POST['product_name'];
    $new_quantity = $_POST['new_quantity'];

    // Update the quantity of the product in the database
    $sql = "UPDATE products SET quantity = ? WHERE product_name = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $new_quantity, $product_name);

    if ($stmt->execute()) {
        echo "Quantity updated successfully!";
    } else {
        echo "Error updating quantity: " . $conn->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
