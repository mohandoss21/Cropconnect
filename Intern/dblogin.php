<?php
session_start(); // Start session (if not already started)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection code
    include('db_connection.php');

    // Get username and password from form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate input (you may add more validation checks)
    if (empty($username) || empty($password)) {
        echo "Username and password are required.";
    } else {
        // Prepare SQL statement to retrieve user data
        $sql = "SELECT * FROM Users WHERE username = ?";

        // Prepare and bind parameters
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);

        // Execute query
        $stmt->execute();

        // Get result
        $result = $stmt->get_result();

        // Check if user exists
        if ($result->num_rows == 1) {
            // Fetch user data
            $row = $result->fetch_assoc();

            // Verify password
            if (password_verify($password, $row['password'])) {
                // Password is correct, create session variables
                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = $row['id'];

                // Redirect user to dashboard or any other page
                header("Location: shop.php");
                exit();
            } else {
                echo "Incorrect password.";
            }
        } else {
            echo "User not found.";
        }

        // Close statement
        $stmt->close();
    }

    // Close connection
    $conn->close();
}
?>
