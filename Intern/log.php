<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <?php
    session_start();
    include "db_conn.php";
    
    $username = $password = $email = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = test_input($_POST["username"]);
        $email = test_input($_POST["email"]);
        $password = test_input($_POST["password"]);
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users WHERE user_name=? AND pass_word=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['user_name'] = $row['user_name'];
        echo "Login Successful";
     
        header("Location: shop.php");
        exit(); 
    } else {
        echo "Incorrect";
    }
   
    $stmt->close();
    $conn->close();
    ?>
  </body>
</html>
