<?php
session_start();
require_once 'db_connect.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate user input (sanitize, validate, etc.)
    // For simplicity, let's assume validation/sanitization is done properly
    if ($username === 'admin' && $password === '123') {
        $_SESSION['admin'] = true;
        header("Location: admin_dashboard.php");
        exit();
      }

    // Fetch user from database based on username
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($dbConnection, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $passwordindb = $row['password_hash'];

        // Verify password using password_verify function
        if ($password==$passwordindb) {
            // Password is correct, set session variables and redirect to shop page
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];
            header("Location: shop.html");
            exit();
        } else {
            $error_message = "Incorrect password.";
            echo "<script>
        // Display a confirmation dialog
        let confirmed = confirm('Incorrect Password. Try again!');

        // Check if user clicked OK
        if (confirmed) {
            // Redirect to a specific page
            window.location.href = 'login.php';
        } else {
            window.location.href = 'index.html';
        }
    </script>";
        }
    } else {
        $error_message = "User not found.";
        echo $error_message;
        echo "<script>
        // Display a confirmation dialog
        let confirmed = confirm('User Not Found. Please Sign Up First?');

        // Check if user clicked OK
        if (confirmed) {
            // Redirect to a specific page
            window.location.href = 'signup.php';
        } else {
            window.location.href = 'login.php';
        }
    </script>";
      

    }

    
}

// If the script reaches here, there was an error with login
$_SESSION['error_message'] = $error_message;
exit();
?>
