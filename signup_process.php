<?php
session_start();

// Include your database connection file
require_once 'db_connect.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password']; // For better security, consider hashing the password before storing it

    // Perform basic validation (you can add more validation as needed)
    if (empty($fullname) || empty($email) || empty($password)) {
        // Handle empty fields error
        $_SESSION['error'] = 'Please fill in all fields.';
        header("Location: signup.php");
        exit();
    }

    // Check if the email is already registered
    $checkEmailQuery = "SELECT * FROM users WHERE email = '$email'";
    $checkEmailResult = mysqli_query($dbConnection, $checkEmailQuery);
    if (mysqli_num_rows($checkEmailResult) > 0) {
        // Handle existing email error
        
        $_SESSION['error'] = 'Email already exists. Please use a different email.';
        header("Location: signup.php");
        exit();
    }
    $checkUsernameQuery = "SELECT * FROM users WHERE username = '$fullname'";
    $checkUsernameResult = mysqli_query($dbConnection, $checkUsernameQuery);
    if (mysqli_num_rows($checkUsernameResult) > 0) {
        // Handle existing email error
        $_SESSION['error'] = 'Username already exists. Please use a different username.';
        echo $_SESSION['error'];
        echo "<a href='signup.php'><button>Sign In again...</button></a>";
        exit();
    }

    // Insert user data into the database
    $insertUserQuery = "INSERT INTO users (username, email, password_hash) VALUES ('$fullname', '$email', '$password')";
    if (mysqli_query($dbConnection, $insertUserQuery)) {
        // Registration successful, redirect to login page
        $_SESSION['success'] = 'Registration successful. Please login.';
        header("Location: login.php");
        exit();
    } else {
        // Handle database insertion error
        $_SESSION['error'] = 'Registration failed. Please try again later.';
        header("Location: signup.php");
        exit();
    }  
} else {
    // Redirect to the sign-up page if accessed directly
    header("Location: signup.php");
    exit();
}
