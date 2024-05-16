<?php
session_start();
require_once 'db_connect.php'; // Include your database connection file

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php"); // Redirect to login page if user is not logged in
  exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user_id = $_SESSION['user_id'];
  $name = $_POST['name'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $total_price = $_SESSION['total']; // Assuming you're passing total price from checkout.php

  // Save order details to database (you may have an 'orders' table for this purpose)
  $insert_order_sql = "INSERT INTO orders (user_id, total_Amount) VALUES ($user_id, $total_price)";
  mysqli_query($dbConnection, $insert_order_sql);

  // Clear the user's cart (assuming you have a 'carts' table)
  $clear_cart_sql = "DELETE FROM carts WHERE user_id = $user_id";
  mysqli_query($dbConnection, $clear_cart_sql);

  // Redirect to a thank you page or order confirmation page
  header("Location: order_confirmation.php");
  exit();
} else {
  header("Location: checkout.php"); // Redirect back to checkout page if form not submitted
  exit();
}
?>
