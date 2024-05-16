<?php
session_start();
require_once 'db_connect.php'; // Include your database connection file

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php"); // Redirect to login page if user is not logged in
  exit();
}

if (isset($_GET['product_id'])) {
  $user_id = $_SESSION['user_id'];
  $product_id = $_GET['product_id'];

  // Check if the product is already in the cart
  $check_sql = "SELECT * FROM carts WHERE user_id = $user_id AND product_id = $product_id";
  $check_result = mysqli_query($dbConnection, $check_sql);

  if (mysqli_num_rows($check_result) == 0) {
    // Product not in cart, add it
    $insert_sql = "INSERT INTO carts (user_id, product_id, quantity) VALUES ($user_id, $product_id, 1)";
    mysqli_query($dbConnection, $insert_sql);   
  }
}

header("Location: shop.html"); // Redirect back to shop page
exit();
?>
