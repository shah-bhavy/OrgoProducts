<?php
session_start();
require_once 'db_connect.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['user_id'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";
  mysqli_query($dbConnection, $sql);

  header("Location: contact_success.php");
  exit();
} else {
  header("Location: signup.php"); // Redirect back if not logged in
  exit();
}
?>
